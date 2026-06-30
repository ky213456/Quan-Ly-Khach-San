<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class HinhAnhSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('hinh_anhs')->insert([
            ['id_loai_phong' => 1, 'hinh_anh' => '/images/std1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['id_loai_phong' => 1, 'hinh_anh' => '/images/std2.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['id_loai_phong' => 2, 'hinh_anh' => '/images/sup1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['id_loai_phong' => 3, 'hinh_anh' => '/images/dlx1.jpg', 'created_at' => $now, 'updated_at' => $now],
            ['id_loai_phong' => 4, 'hinh_anh' => '/images/sut1.jpg', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}