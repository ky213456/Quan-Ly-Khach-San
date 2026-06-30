<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChiTietDatPhongSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('chi_tiet_dat_phongs')->insert([
            ['id_dat_phong' => 1, 'id_phong' => 3, 'don_gia' => 1200000, 'thanh_tien' => 1200000, 'ghi_chu' => null, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 2, 'id_phong' => 2, 'don_gia' => 800000, 'thanh_tien' => 1600000, 'ghi_chu' => null, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 3, 'id_phong' => 1, 'don_gia' => 500000, 'thanh_tien' => 1000000, 'ghi_chu' => null, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 4, 'id_phong' => 4, 'don_gia' => 2500000, 'thanh_tien' => 15000000, 'ghi_chu' => null, 'created_at' => $now, 'updated_at' => $now],
            ['id_dat_phong' => 5, 'id_phong' => 5, 'don_gia' => 1500000, 'thanh_tien' => 0, 'ghi_chu' => null, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}