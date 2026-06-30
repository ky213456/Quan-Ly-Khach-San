<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChucNangSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('chuc_nangs')->insert([
            ['ten_chuc_nang' => 'Quản lý phòng', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_nang' => 'Quản lý đặt phòng', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_nang' => 'Quản lý nhân viên', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_nang' => 'Quản lý dịch vụ', 'created_at' => $now, 'updated_at' => $now],
            ['ten_chuc_nang' => 'Báo cáo doanh thu', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}