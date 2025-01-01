<?php

namespace App\Http\Controllers;

use App\Models\kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KamarController extends Controller
{
    function tampil() {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $kamars = kamar::get();
        return view('kamar.tampil', compact('kamars'));
    }else{
        return view('kamar.tampil');
    }
}

    function tambah() {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        return view('kamar.tambah');
    }else{
        return view('kamar.tambah');
    }
}

    function submit(Request $request) {
        $kamars = new kamar();
        $kamars->id_kamar = $request->id_kamar;
        $kamars->info_kamar = $request->info_kamar;
        $kamars->no_kamar = $request->no_kamar;
        $kamars->harga_kamar = $request->harga_kamar;
        $kamars->status_kamar = $request->status_kamar;
        $kamars->save();

        return redirect()->route('kamar.tampil');
    }

    function edit($id_kamar) {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $kamars = kamar::find($id_kamar);
        return view('kamar.edit', compact('kamars'));
    }else{
        return view('kamar.edit');
    }
}

    function update(Request $request, $id_kamar) {
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $kamars = kamar::find($id_kamar);
        $kamars->id_kamar = $request->id_kamar;
        $kamars->info_kamar = $request->info_kamar;
        $kamars->no_kamar = $request->no_kamar;
        $kamars->harga_kamar = $request->harga_kamar;
        $kamars->status_kamar = $request->status_kamar;
        $kamars->update();

        return redirect()->route('kamar.tampil');
    }else{
        return view('kamar.tampil');
    }
    }

    function delete($id_kamar) {
        $kamars = kamar::find($id_kamar);
        $kamars->delete();
        return redirect()->route('kamar.tampil');
    }
}

