<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loai_phongs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_loai_phong');
            $table->string('hinh_anh')->nullable();
            $table->decimal('gia_theo_ngay', 12, 2);
            $table->integer('so_nguoi_toi_da');
            $table->text('mo_ta')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loai_phongs');
    }
};