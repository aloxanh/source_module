<?php

use App\Models\shared\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Role::truncate();
        DB::table('roles')->delete();
        Role::create(['name' => 'admin','description'=>'admin','active'=>'1']);
        Role::create(['name' => 'user','description'=>'user','active'=>'1']);
        Role::create(['name' => 'leader','description'=>'leader','active'=>'1']);
    }
}
