<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LoaiPhongSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('loai_phongs')->insert([
            ['ten_loai_phong' => 'Phòng Standard (STD)', 'hinh_anh' => 'std.jpg', 'gia_theo_ngay' => 500000, 'so_nguoi_toi_da' => 2, 'mo_ta' => 'Phòng tiêu chuẩn, diện tích nhỏ.', 'created_at' => $now, 'updated_at' => $now],
            ['ten_loai_phong' => 'Phòng Superior (SUP)', 'hinh_anh' => 'sup.jpg', 'gia_theo_ngay' => 800000, 'so_nguoi_toi_da' => 2, 'mo_ta' => 'Phòng chất lượng cao, view đẹp.', 'created_at' => $now, 'updated_at' => $now],
            ['ten_loai_phong' => 'Phòng Deluxe (DLX)', 'hinh_anh' => 'dlx.jpg', 'gia_theo_ngay' => 1200000, 'so_nguoi_toi_da' => 3, 'mo_ta' => 'Phòng cao cấp, không gian rộng rãi.', 'created_at' => $now, 'updated_at' => $now],
            ['ten_loai_phong' => 'Phòng Suite (SUT)', 'hinh_anh' => 'sut.jpg', 'gia_theo_ngay' => 2500000, 'so_nguoi_toi_da' => 4, 'mo_ta' => 'Phòng thượng hạng, có phòng khách riêng.', 'created_at' => $now, 'updated_at' => $now],
            ['ten_loai_phong' => 'Phòng Family', 'hinh_anh' => 'family.jpg', 'gia_theo_ngay' => 1500000, 'so_nguoi_toi_da' => 5, 'mo_ta' => 'Phòng dành cho gia đình.', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}