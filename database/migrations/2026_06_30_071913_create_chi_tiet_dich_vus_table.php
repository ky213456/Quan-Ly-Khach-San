<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('chi_tiet_dich_vus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dat_phong')->constrained('dat_phongs')->onDelete('cascade');
            $table->foreignId('id_dich_vu')->constrained('dich_vus');
            $table->integer('so_luong');
            $table->decimal('don_gia', 12, 2);
            $table->decimal('thanh_tien', 12, 2);
            $table->text('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_dich_vus');
    }
};