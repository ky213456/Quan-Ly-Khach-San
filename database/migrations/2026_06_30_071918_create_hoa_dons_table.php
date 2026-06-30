<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hoa_dons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_dat_phong')->constrained('dat_phongs');
            $table->integer('so_ngay_o');
            $table->decimal('gia_phong_moi_ngay', 12, 2);
            $table->decimal('tong_tien_phong', 12, 2);
            $table->decimal('tong_tien_dich_vu', 12, 2)->default(0);
            $table->decimal('tong_tien', 12, 2);
            $table->string('phuong_thuc_tt')->nullable();
            $table->string('trang_thai_tt')->default('chua_thanh_toan');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hoa_dons');
    }
};