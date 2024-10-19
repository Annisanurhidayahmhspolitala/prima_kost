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
        Schema::create('pemilik_kosts', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pemilik_kost');
            $table->string('no_hp_pemilik_kost');
            $table->string('no_rekening');
            $table->string('alamat_pemilik_kost');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemilik_kosts');
    }
};
