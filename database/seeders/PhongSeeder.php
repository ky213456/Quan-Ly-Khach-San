<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PhongSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('phongs')->insert([
            ['so_phong' => '101', 'id_loai_phong' => 1, 'tang' => 'Tầng 1', 'trang_thai_phong' => 'trong', 'created_at' => $now, 'updated_at' => $now],
            ['so_phong' => '102', 'id_loai_phong' => 2, 'tang' => 'Tầng 1', 'trang_thai_phong' => 'dang_o', 'created_at' => $now, 'updated_at' => $now],
            ['so_phong' => '201', 'id_loai_phong' => 3, 'tang' => 'Tầng 2', 'trang_thai_phong' => 'trong', 'created_at' => $now, 'updated_at' => $now],
            ['so_phong' => '202', 'id_loai_phong' => 4, 'tang' => 'Tầng 2', 'trang_thai_phong' => 'da_dat', 'created_at' => $now, 'updated_at' => $now],
            ['so_phong' => '301', 'id_loai_phong' => 5, 'tang' => 'Tầng 3', 'trang_thai_phong' => 'bao_tri', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}