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
        Schema::create('cadangan', function (Blueprint $table) {
            $table->id('id_akun');
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->enum('level',['admin', 'penghuni']);
            $table->string('password');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akuns');
    }
};