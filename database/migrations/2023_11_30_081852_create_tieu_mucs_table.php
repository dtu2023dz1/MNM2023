<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tieu_mucs', function (Blueprint $table) {
            $table->id();
            $table->string('ten_tieu_muc');
            $table->string('MAPC')->nullable();
            $table->integer('id_chuong');
            $table->integer('id_de_muc');
            $table->integer('id_chu_de');
            $table->string('hash_chu_de')->nullable();
            $table->string('hash_de_muc')->nullable();
            $table->string('hash_chuong')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tieu_mucs');
    }
};
