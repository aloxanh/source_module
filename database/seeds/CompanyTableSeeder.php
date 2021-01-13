<?php

use App\Models\shared\Company;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->delete();
        Company::create(['id' => '6000', 'name' => 'TLMN', 'active' => 1]);
        Company::create(['id' => '6100', 'name' => 'TLMB', 'active' => 1]);
        Company::create(['id' => '6200', 'name' => 'TLMT', 'active' => 1]);
    }
}
