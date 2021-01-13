<?php

use App\Models\shared\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('role_user')->truncate();
        // User::truncate();
        DB::table('users')->delete();
        $adminRole = Role::where('name', 'admin')->first();
        $leaderRole = Role::where('name', 'leader')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'username' => 'admin',
            'companycode' => '6000',

            'password' => Hash::make('123')
        ]);
        $leader = User::create([
            'name' => 'Leader User',
            'companycode' => '6000',
            'username' => 'leader',
            'email' => 'leader@leader.com',
            'password' => Hash::make('123')
        ]);
        $user = User::create([
            'name' => 'Generic User',
            'username' => 'user',
            'email' => 'user@user.com',
            'companycode' => '6000',
            'password' => Hash::make('123')
        ]);
        $admin->roles()->attach($adminRole);
        $user->roles()->attach($userRole);
        $leader->roles()->attach($leaderRole);
    }
}
