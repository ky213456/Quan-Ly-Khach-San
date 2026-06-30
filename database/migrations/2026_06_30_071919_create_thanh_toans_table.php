<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('thanh_toans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_hoa_dons')->constrained('hoa_dons')->onDelete('cascade');
            $table->decimal('so_tien', 12, 2);
            $table->string('phuong_thuc'); 
            $table->text('noi_dung_qr')->nullable();
            $table->string('trang_thai'); 
            $table->dateTime('thoi_gian_tt');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('thanh_toans');
    }
};