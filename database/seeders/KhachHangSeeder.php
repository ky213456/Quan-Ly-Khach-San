<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KhachHangSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('khach_hangs')->insert([
            ['ho_va_ten' => 'Đinh Công Tiến', 'so_cccd_ho_chieu' => '001092123456', 'so_dien_thoai' => '0987654321', 'email' => 'tien.dinh@gmail.com', 'dia_chi' => 'Hà Nội', 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Vũ Thị Hoa', 'so_cccd_ho_chieu' => '001092654321', 'so_dien_thoai' => '0912345678', 'email' => 'hoa.vu@gmail.com', 'dia_chi' => 'Hải Phòng', 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Lý Quốc Bảo', 'so_cccd_ho_chieu' => '001092111222', 'so_dien_thoai' => '0933445566', 'email' => 'bao.ly@gmail.com', 'dia_chi' => 'Đà Nẵng', 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Bùi Thu Hà', 'so_cccd_ho_chieu' => '001092333444', 'so_dien_thoai' => '0977889900', 'email' => 'ha.bui@gmail.com', 'dia_chi' => 'Nha Trang', 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Hồ Minh Trí', 'so_cccd_ho_chieu' => '001092555666', 'so_dien_thoai' => '0901234567', 'email' => 'tri.ho@gmail.com', 'dia_chi' => 'TP. Hồ Chí Minh', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}