<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(SlocTableSeeder::class);
        $this->call(CompanyTableSeeder::class);

        $this->call(UsersTableSeeeder::class);
        $this->call(RolesTableSeeeder::class);
        $this->call(UsersTableSeeeder::class);
        $this->call(tmdt_TrangThaiDonHang::class);
        $this->call(PermissionsTableSeeeder::class);
    }
}
