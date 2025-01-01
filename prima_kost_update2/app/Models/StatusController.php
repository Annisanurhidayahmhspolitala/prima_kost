<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Rating;

class StatusController extends Controller
{
    public function statusk()
    {
        // Ambil semua data kamar beserta rata-rata rating
        $kamar = Kamar::all()->map(function ($room) {
            $room->average_rating = Rating::where('id_kamar', $room->id_kamar)->avg('rating') ?? 0;
            return $room;
        });

        // Kirim data ke view
        return view('tpenghuni.statuskamar', compact('kamar'));
    }
}
