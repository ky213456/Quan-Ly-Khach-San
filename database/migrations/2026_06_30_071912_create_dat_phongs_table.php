<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dat_phongs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_khach_hang')->constrained('khach_hangs');
            $table->foreignId('id_nhan_vien')->nullable()->constrained('nhan_viens');
            $table->dateTime('ngay_nhan_phong');
            $table->dateTime('ngay_tra_du_kien');
            $table->dateTime('ngay_tra_thuc_te')->nullable();
            $table->string('trang_thai_dat')->default('cho_xac_nhan');
            $table->text('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dat_phongs');
    }
};