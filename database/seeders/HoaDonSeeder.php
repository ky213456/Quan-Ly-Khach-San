<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HoaDonSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('hoa_dons')->insert([
            ['id_dat_phong' => 2, 'so_ngay_o' => 2, 'gia_phong_moi_ngay' => 800000, 'tong_tien_phong' => 1600000, 'tong_tien_dich_vu' => 360000, 'tong_tien' => 1960000, 'phuong_thuc_tt' => 'tien_mat', 'trang_thai_tt' => 'da_thanh_toan', 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 1, 'so_ngay_o' => 2, 'gia_phong_moi_ngay' => 1200000, 'tong_tien_phong' => 2400000, 'tong_tien_dich_vu' => 120000, 'tong_tien' => 2520000, 'phuong_thuc_tt' => 'chuyen_khoan', 'trang_thai_tt' => 'chua_thanh_toan', 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 4, 'so_ngay_o' => 6, 'gia_phong_moi_ngay' => 2500000, 'tong_tien_phong' => 15000000, 'tong_tien_dich_vu' => 575000, 'tong_tien' => 15575000, 'phuong_thuc_tt' => 'the_tin_dung', 'trang_thai_tt' => 'chua_thanh_toan', 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 3, 'so_ngay_o' => 2, 'gia_phong_moi_ngay' => 500000, 'tong_tien_phong' => 1000000, 'tong_tien_dich_vu' => 0, 'tong_tien' => 1000000, 'phuong_thuc_tt' => null, 'trang_thai_tt' => 'chua_thanh_toan', 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 5, 'so_ngay_o' => 2, 'gia_phong_moi_ngay' => 1500000, 'tong_tien_phong' => 3000000, 'tong_tien_dich_vu' => 0, 'tong_tien' => 3000000, 'phuong_thuc_tt' => null, 'trang_thai_tt' => 'da_huy', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}