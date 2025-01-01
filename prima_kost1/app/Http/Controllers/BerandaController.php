<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kamar;
use App\Models\pembayaran;
use Illuminate\Support\Facades\Auth;

class BerandaController extends Controller
{
    public function beranda(){
        if (Auth::check() && Auth::user()->usertype === 'admin'){
            $user = User::count();

            $duit = pembayaran::sum('jumlah_pembayaran');

            $kamar = kamar::where('status_kamar', 'ditempati')->count();

            return view( 'beranda', compact( 'user', 'duit', 'kamar' ) );
        }else{
            return redirect()->route('berandap');
        }
    }
}
