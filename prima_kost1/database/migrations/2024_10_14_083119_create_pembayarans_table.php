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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id('id_pembayaran');
            $table->decimal('jumlah_pembayaran', 15, 2);
            $table->string('metode_pembayaran');
            $table->date('tanggal_pembayaran');
            $table->string('riwayat_pembayaran');
            $table->string('refrensi_pembayaran')->nullable();
            $table->foreignId('id_penghuni')->nullable()->constrained('penghunis', 'id_penghuni')->onDelete('set null');
            $table->foreignId('id_tagihan')->nullable()->constrained('tagihans', 'id_tagihan')->onDelete('set null');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
