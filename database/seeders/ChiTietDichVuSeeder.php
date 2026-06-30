<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChiTietDichVuSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('chi_tiet_dich_vus')->insert([
            ['id_dat_phong' => 2, 'id_dich_vu' => 1, 'so_luong' => 2, 'don_gia' => 30000, 'thanh_tien' => 60000, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 2, 'id_dich_vu' => 2, 'so_luong' => 2, 'don_gia' => 150000, 'thanh_tien' => 300000, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 4, 'id_dich_vu' => 4, 'so_luong' => 1, 'don_gia' => 500000, 'thanh_tien' => 500000, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 4, 'id_dich_vu' => 5, 'so_luong' => 5, 'don_gia' => 15000, 'thanh_tien' => 75000, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 1, 'id_dich_vu' => 3, 'so_luong' => 1, 'don_gia' => 120000, 'thanh_tien' => 120000, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}