<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id('id_rating');
            $table->unsignedBigInteger('id_kamar'); // Referensi ke tabel kamars
            $table->unsignedBigInteger('id_penghuni'); // Referensi ke tabel users
            $table->tinyInteger('kenyamanan')->unsigned(); // Nilai kenyamanan (1-5)
            $table->tinyInteger('kebersihan')->unsigned(); // Nilai kebersihan (1-5)
            $table->tinyInteger('keamanan')->unsigned(); // Nilai keamanan (1-5)
            $table->tinyInteger('rating')->unsigned(); // Nilai rating (1-5)
            $table->text('ulasan')->nullable(); // Ulasan
            $table->timestamps();

            $table->foreign('id_kamar')->references('id_kamar')->on('kamars')->onDelete('cascade');
            $table->foreign('id_penghuni')->references('id_penghuni')->on('penghunis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
