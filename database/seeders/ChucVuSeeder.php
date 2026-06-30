<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChucVuSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('chuc_vus')->insert([
            ['ten_chuc_vu' => 'Giám đốc', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_vu' => 'Quản lý', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_vu' => 'Tiếp tân', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_vu' => 'Kế toán', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_vu' => 'Nhân viên buồng phòng', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}