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
            $table->id('id_tagihan'); // Kolom ID untuk tagihan
            $table->decimal('jumlah_tagihan', 15, 2); // Jumlah tagihan dengan presisi
            $table->date('tanggal_tagihan'); // Tanggal tagihan
            $table->date('tenggat_tagihan'); // Tanggal tenggat untuk tagihan
            $table->foreignId('id_penghuni')->nullable() // Foreign key untuk relasi dengan tabel penghuni
                ->constrained('penghunis', 'id_penghuni') // Menetapkan relasi dengan tabel 'penghunis'
                ->onDelete('cascade'); // Menghapus tagihan jika penghuni dihapus
            $table->timestamps(); // Kolom untuk waktu dibuat dan diupdate
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
