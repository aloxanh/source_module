<?php

use Illuminate\Database\Seeder;
use App\Models\tmdt\TrangThaiDonHang;
use Illuminate\Support\Facades\DB;

class tmdt_TrangThaiDonHang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tmdt_trangthai_donhang')->delete();
        TrangThaiDonHang::create(['Ma' => '1', 'Ten' => 'Đã Soạn']);
        TrangThaiDonHang::create(['Ma' => '2', 'Ten' => 'Đã Đóng Gói']);
        TrangThaiDonHang::create(['Ma' => '3', 'Ten' => 'Đã Giao NVC']);
    }
}
