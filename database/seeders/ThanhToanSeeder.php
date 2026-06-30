<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ThanhToanSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('thanh_toans')->insert([
            ['id_hoa_dons' => 1, 'phuong_thuc' => 'tien_mat', 'so_tien' => 1960000, 'thoi_gian_tt' => Carbon::parse('2026-06-30 11:35:00'), 'trang_thai' => 'thanh_cong', 'noi_dung_qr' => null, 'created_at' => $now, 'updated_at' => $now],
            ['id_hoa_dons' => 2, 'phuong_thuc' => 'chuyen_khoan', 'so_tien' => 100000, 'thoi_gian_tt' => Carbon::parse('2026-06-30 10:00:00'), 'trang_thai' => 'thanh_cong', 'noi_dung_qr' => 'NC001', 'created_at' => $now, 'updated_at' => $now],
            ['id_hoa_dons' => 5, 'phuong_thuc' => 'the_tin_dung', 'so_tien' => 200000, 'thoi_gian_tt' => Carbon::parse('2026-06-15 09:00:00'), 'trang_thai' => 'hoan_tien', 'noi_dung_qr' => null, 'created_at' => $now, 'updated_at' => $now],
            ['id_hoa_dons' => 1, 'phuong_thuc' => 'vi_dien_tu', 'so_tien' => 0, 'thoi_gian_tt' => Carbon::parse('2026-06-15 09:00:00'), 'trang_thai' => 'that_bai', 'noi_dung_qr' => null, 'created_at' => $now, 'updated_at' => $now],
            ['id_hoa_dons' => 3, 'phuong_thuc' => 'chuyen_khoan', 'so_tien' => 5000000, 'thoi_gian_tt' => Carbon::parse('2026-06-29 14:30:00'), 'trang_thai' => 'thanh_cong', 'noi_dung_qr' => 'NC003', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}