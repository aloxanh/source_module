<?php

use App\Models\shared\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionsTableSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->delete();
        Permission::create(['name' => 'in_phieu_giao_hang', 'description' => 'In phiếu giao hàng']);
        Permission::create(['name' => 'upload_don_hang', 'description' => 'Upload đơn hàng']);
        Permission::create(['name' => 'upload_mvc', 'description' => 'Upload mã vận chuyển']);
    }
}
