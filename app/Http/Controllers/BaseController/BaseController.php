<?php

namespace App\Http\Controllers\BaseController;

use App\Http\Controllers\Controller;
use App\Models\shared\Menu;
use App\Ultils\Ultils;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware(function ($request, $next) {

            $menu_module = array();
            $menu_permission = array();
            $list = array();
            //load menu từ Role_user
            $user = new User();
            $user =  Auth()->user();
            //dd($user->hasPermission('upload_mvc'));
            Auth::user()->roles->load('menus');
            $role_menu_user = Auth::user()->roles->pluck('menus')->flatten();
            // dd(Auth::user()->roles);
            for ($i = 0; $i < count($role_menu_user); $i++) {
                $idmenuroot = Ultils::getMenuRoot($role_menu_user[$i]->id);
                Ultils::getMenuTreeTop($role_menu_user[$i]->id, $list);
                // dd($list);

                if (!in_array($idmenuroot->id, $menu_module)) {
                    array_push($menu_module, $idmenuroot->id . '');
                }
                foreach ($list as $key => $value) {
                    if (!in_array($value, $menu_permission)) {
                        array_push($menu_permission, $value . '');
                    }
                }
            }


            // $menus = Menu::where('parent', 0)->get();
            $menus = Menu::whereIn('id', $menu_module)->get();

            $link = $request->path();
            $menucurr = Menu::where('link', $link)->get()->first();
            // dd($menucurr->parent()->get()!=null);
            view()->share(compact('menus', 'menucurr', 'menu_permission'));
            return $next($request);
        });
    }
}
