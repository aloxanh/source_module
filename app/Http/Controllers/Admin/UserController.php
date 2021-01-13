<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\BaseController\BaseController;
use App\Http\Controllers\Controller;
use App\Models\shared\Company;
use App\Models\shared\Role;
use App\Models\shared\Sloc;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends BaseController
{

    public function index()
    {

        $user = User::paginate(15);

        return view('admin.user.index')->with('users', $user);
    }
    public function create()
    {
        $company = Company::all();
        $sloc = Sloc::all();

        return view('admin.user.create', ['company' => $company, 'sloc' => $sloc]);
    }
    public function store(Request $request)
    {

        // dd($request['username']);
        $user =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'username' => $request['username'],
            'companycode' => $request['companycode'],
            'sloc' => $request['sloc'],
            'password' => Hash::make($request['password']),
        ]);

        $role = Role::select('id')->where('name', 'user')->first();
        $user->roles()->attach($role);
        $request->session()->flash('success', $user->name . ' has been created');
        return redirect()->route('adminusers.index');
    }
    public function edit(User $user)
    {
        if (Gate::denies('edit-user')) {
            return redirect(route('adminusers.index'));
        }
        $company = Company::all();
        $sloc = Sloc::all();
        $roles = Role::all();
        return view('admin.user.edit')->with([
            'user' => $user,
            'roles' => $roles,
            'company' => $company,
            'sloc' => $sloc
        ]);
    }

    public function update(Request $request, User $user)
    {


        $user->roles()->sync($request->roles);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->companycode = $request->companycode;
        $user->sloc = $request->sloc;
        if ($request->doimatkhau) {
            $user->password = Hash::make($request['password']);
        }


        if ($user->save()) {
            $request->session()->flash('success', $user->name . ' has been updated');
        } else {
            $request->session()->flash('error', 'There was an error updating the user');
        }

        return redirect()->route('adminusers.index');
    }
    public function show(User $user)
    {
    }
    public function destroy(User $user)
    {
        if (Gate::denies('delete-user')) {
            return redirect(route('adminusers.index'));
        }
        $user->roles()->detach();
        $user->delete();
        return redirect()->route('adminusers.index');
    }
    public function search_user(Request $request)
    {
        $searchTerm  = $request->nav_search_input;
        $user = User::where('name', 'LIKE', "%{$searchTerm}%")
            ->orWhere('username',  'LIKE', "%{$searchTerm}%")
            ->orWhere('email',  'LIKE', "%{$searchTerm}%")
            ->paginate(15)->appends(request()->except('page'));

        return view('admin.user.index')->with(['users' => $user, 'searchTerm' => $searchTerm]);
    }
}
