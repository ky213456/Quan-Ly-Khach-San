<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DichVuSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('dich_vus')->insert([
            ['ten_dich_vu' => 'Giặt ủi', 'nhom_dich_vu' => 'Dịch vụ tiện ích', 'don_vi_tinh' => 'Kg', 'don_gia' => 30000, 'trang_thai' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['ten_dich_vu' => 'Ăn sáng Buffet', 'nhom_dich_vu' => 'Ẩm thực', 'don_vi_tinh' => 'Vé', 'don_gia' => 150000, 'trang_thai' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['ten_dich_vu' => 'Thuê xe máy', 'nhom_dich_vu' => 'Di chuyển', 'don_vi_tinh' => 'Ngày', 'don_gia' => 120000, 'trang_thai' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['ten_dich_vu' => 'Massage & Spa', 'nhom_dich_vu' => 'Thư giãn', 'don_vi_tinh' => 'Giờ', 'don_gia' => 500000, 'trang_thai' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['ten_dich_vu' => 'Nước suối thêm', 'nhom_dich_vu' => 'Đồ uống', 'don_vi_tinh' => 'Chai', 'don_gia' => 15000, 'trang_thai' => 1, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}