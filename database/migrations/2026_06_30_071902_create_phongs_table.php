<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('phongs', function (Blueprint $table) {
            $table->id();
            $table->string('so_phong');
            $table->foreignId('id_loai_phong')->constrained('loai_phongs');
            $table->string('tang');
            $table->string('trang_thai_phong')->default('trong'); // trong, dang_o, da_dat, dang_don, bao_tri
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('phongs');
    }
};