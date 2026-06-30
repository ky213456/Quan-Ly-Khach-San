<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class NhanVienSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();
        DB::table('nhan_viens')->insert([
            ['ho_va_ten' => 'Nguyễn Văn An', 'email' => 'an.nguyen@example.com', 'mat_khau' => Hash::make('password123'), 'trang_thai' => 1, 'id_chuc_vu' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Trần Thị Bình', 'email' => 'binh.tran@example.com', 'mat_khau' => Hash::make('password123'), 'trang_thai' => 1, 'id_chuc_vu' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Lê Văn Cường', 'email' => 'cuong.le@example.com', 'mat_khau' => Hash::make('password123'), 'trang_thai' => 1, 'id_chuc_vu' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Phạm Thị Dung', 'email' => 'dung.pham@example.com', 'mat_khau' => Hash::make('password123'), 'trang_thai' => 1, 'id_chuc_vu' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['ho_va_ten' => 'Hoàng Văn Em', 'email' => 'em.hoang@example.com', 'mat_khau' => Hash::make('password123'), 'trang_thai' => 1, 'id_chuc_vu' => 5, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}