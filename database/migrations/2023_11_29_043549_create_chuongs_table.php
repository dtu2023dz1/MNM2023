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
        Schema::create('chuongs', function (Blueprint $table) {
            $table->id();
            $table->string('hash')->nullable();
            $table->string('ten_chuong');
            $table->integer('so_thu_tu');
            $table->integer('id_de_muc');
            $table->integer('id_chu_de');
            $table->string('hash_chu_de')->nullable();
            $table->string('hash_de_muc')->nullable();
            $table->integer('is_open')->default(1);
            $table->string('MAPC')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chuongs');
    }
};
