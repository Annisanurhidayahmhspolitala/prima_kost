<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    /**
     * Tampilkan halaman pengisian rating dan ulasan.
     */
    public function show($id_kamar)
    {
        $kamar = kamar::findOrFail($id_kamar);

        return view('tpenghuni.ulasan', compact('kamar'));
    }

    /**
     * Proses penyimpanan rating dan ulasan.
     */
    public function submit(Request $request, $id_kamar)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'ulasan' => 'required|string|max:500',
    ]);
    $penghuni = Auth::user()->penghuni;
    rating::create([
        'id_kamar' => $id_kamar,
        'id_penghuni' => $penghuni->id_penghuni, 
        'kenyamanan' => $request->kenyamanan,
        'kebersihan' => $request->kebersihan,
        'keamanan' => $request->keamanan,
        'rating' => $request->rating,
        'ulasan' => $request->ulasan,
    ]);

    return redirect()->route('beranda')->with('success', 'Ulasan berhasil disimpan!');
}

    /*
     * Tampilkan semua ulasan untuk kamar tertentu.
     */
    public function index($id_kamar)
    {
        $kamar = kamar::findOrFail($id_kamar);
        $ratings = rating::where('id_kamar', $id_kamar)->latest()->get();

        return view('rating.tampil', compact('kamar', 'ratings'));
    }
}
