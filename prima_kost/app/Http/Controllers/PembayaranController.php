<?php

// app/Http/Controllers/TagihanController.php
namespace App\Http\Controllers;

use App\Models\tagihan;
use App\Models\pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function pembayaran(){
        
    }

    public function riwayat()
    {
        // Mengambil data riwayat pembayaran, misalnya berdasarkan user yang sedang login
        $pembayarans = pembayaran::all();

        // Kirim data ke view riwayat
        return view('riwayat_pembayaran.riwayat', compact('pembayarans'));
    }

}