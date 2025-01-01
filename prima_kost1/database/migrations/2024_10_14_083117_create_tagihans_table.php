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
        Schema::create('tagihans', function (Blueprint $table) {
            $table->id('id_tagihan');
            $table->decimal('jumlah_tagihan', 15, 2);
            $table->date('tanggal_tagihan');
            $table->date('tenggat_tagihan');
            $table->foreignId('id_penghuni')->nullable()->constrained('penghunis', 'id_penghuni')->onDelete('set null');
            $table->string('nama_penghuni');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihans');
    }
};
