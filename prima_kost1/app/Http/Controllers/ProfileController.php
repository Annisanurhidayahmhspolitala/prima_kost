<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\penghuni; // Sesuaikan dengan nama model Anda
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function detail()
    {
        // Ambil user yang sedang login
        $user = Auth::user();

        // Ambil data penghuni berdasarkan Id_User
        $penghuni = penghuni::where('id_akun', $user->id)->first();

        // Periksa apakah data penghuni ditemukan
        if (!$penghuni) {
            return redirect()->route('beranda')->with('error', 'Data penghuni tidak ditemukan.');
        }

        // Kirim data penghuni ke view
        return view('tpenghuni.profilp.tampil', [
            'penghuni' => $penghuni
        ]);
    }
}
