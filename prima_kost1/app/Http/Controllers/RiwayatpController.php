<?php

namespace App\Http\Controllers;

use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;

class RiwayatpController extends Controller
{
    public function riwayat()
{
    // Ambil ID akun dari user yang sedang login
    $userId = Auth::id();

    // Ambil data pembayaran berdasarkan id_penghuni yang memiliki id_akun sesuai user yang login
    $pembayarans = Pembayaran::whereHas('penghuni', function ($query) use ($userId) {
                        $query->where('id_akun', $userId);
                    })
                    ->with('penghuni') // Load relasi penghuni
                    ->get();

    // Kirim data ke view riwayat
    return view('tpenghuni.riwayatp', compact('pembayarans'));
}
}