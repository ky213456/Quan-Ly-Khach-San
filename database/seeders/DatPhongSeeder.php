<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatPhongSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('dat_phongs')->insert([
            ['id_khach_hang' => 1, 'id_nhan_vien' => 3, 'ngay_nhan_phong' => Carbon::parse('2026-07-01 14:00:00'), 'ngay_tra_du_kien' => Carbon::parse('2026-07-03 12:00:00'), 'ngay_tra_thuc_te' => null, 'trang_thai_dat' => 'da_xac_nhan', 'ghi_chu' => 'Khách yêu cầu phòng yên tĩnh', 'created_at' => $now, 'updated_at' => $now],
            ['id_khach_hang' => 2, 'id_nhan_vien' => 3, 'ngay_nhan_phong' => Carbon::parse('2026-06-28 14:00:00'), 'ngay_tra_du_kien' => Carbon::parse('2026-06-30 12:00:00'), 'ngay_tra_thuc_te' => Carbon::parse('2026-06-30 11:30:00'), 'trang_thai_dat' => 'da_hoan_thanh', 'ghi_chu' => 'Đã thanh toán trước', 'created_at' => $now, 'updated_at' => $now],
            ['id_khach_hang' => 3, 'id_nhan_vien' => null, 'ngay_nhan_phong' => Carbon::parse('2026-07-10 14:00:00'), 'ngay_tra_du_kien' => Carbon::parse('2026-07-12 12:00:00'), 'ngay_tra_thuc_te' => null, 'trang_thai_dat' => 'cho_xac_nhan', 'ghi_chu' => 'Đặt qua website', 'created_at' => $now, 'updated_at' => $now],
            ['id_khach_hang' => 4, 'id_nhan_vien' => 3, 'ngay_nhan_phong' => Carbon::parse('2026-06-29 14:00:00'), 'ngay_tra_du_kien' => Carbon::parse('2026-07-05 12:00:00'), 'ngay_tra_thuc_te' => null, 'trang_thai_dat' => 'dang_o', 'ghi_chu' => 'Khách VIP', 'created_at' => $now, 'updated_at' => $now],
            ['id_khach_hang' => 5, 'id_nhan_vien' => 3, 'ngay_nhan_phong' => Carbon::parse('2026-06-15 14:00:00'), 'ngay_tra_du_kien' => Carbon::parse('2026-06-17 12:00:00'), 'ngay_tra_thuc_te' => null, 'trang_thai_dat' => 'da_huy', 'ghi_chu' => 'Khách bận đột xuất', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}