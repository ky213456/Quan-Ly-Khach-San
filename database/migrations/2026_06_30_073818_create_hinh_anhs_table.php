<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('hinh_anhs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_loai_phong')->constrained('loai_phongs')->onDelete('cascade');
            $table->string('hinh_anh');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('hinh_anhs');
    }
};