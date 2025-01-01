<?php

namespace App\Http\Controllers;

use App\Models\rating;

class UlasanController extends Controller
{
    public function index()
    {
        // Mengambil data ulasan dengan relasi kamar dan penghuni
        $ratings = rating::with(['kamar', 'penghuni'])->latest()->get();

        // Menampilkan ke view admin
        return view('ulasanadmin.adminu', compact('ratings'));
    }
}
