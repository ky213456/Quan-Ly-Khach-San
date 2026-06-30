<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            ChucNangSeeder::class,
            ChucVuSeeder::class,
            NhanVienSeeder::class,
            KhachHangSeeder::class,
            LoaiPhongSeeder::class,
            PhongSeeder::class,
            DichVuSeeder::class,
            HinhAnhSeeder::class,
            DatPhongSeeder::class,
            ChiTietDichVuSeeder::class,
            ChiTietDatPhongSeeder::class,
            HoaDonSeeder::class,
            ThanhToanSeeder::class,
        ]);
    }
}
