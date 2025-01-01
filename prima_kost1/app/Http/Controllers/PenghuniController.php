<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\kamar;
use App\Models\Penghuni;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenghuniController extends Controller
{
    function tampil(){
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $penghunis = Penghuni::get();
        return view('penghuni.tampil', compact('penghunis'));
    }else{
        return view('penghuni.tampil');
    }
        }

    function tambah(){
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $kamar = kamar::all();

        $user = User::all();
        return view('penghuni.tambah', compact('user', 'kamar'));
    }else{
        return view('penghuni.tambah');
    }
        }

        public function submit(Request $request) {
            // Validasi data
            $request->validate([
                'id_penghuni' => 'required|numeric|unique:penghunis,id_penghuni',
                'nama_penghuni' => 'required|string|max:255',
                'nik' => 'required|numeric|unique:penghunis,nik',
                'no_hp_penghuni' => 'required|numeric',
                'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
                'id_akun' => 'nullable|exists:users,id',
                'id_kamar' => 'nullable|exists:kamars,id_kamar',
            ]);
        
            // Simpan data
            Penghuni::create([
                'id_penghuni' => $request->id_penghuni,
                'nama_penghuni' => $request->nama_penghuni,
                'nik' => $request->nik,
                'no_hp_penghuni' => $request->no_hp_penghuni,
                'jenis_kelamin' => $request->jenis_kelamin,
                'id_akun' => $request->id_akun,
                'id_kamar' => $request->id_kamar,
            ]);

            $kamar = kamar::find($request->id_kamar);
            $kamar->update([
                'status_kamar' => 'ditempati',
            ]);
        
            return redirect()->route('penghuni.tampil')->with('success', 'Penghuni berhasil ditambahkan.');
        }
        

    function edit($id){
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $penghunis = Penghuni::find($id);
        return view('penghuni.edit', compact('penghunis'));
    }else{
        return view('penghuni.edit');
    }
    }

    function update(Request $request, $id){
    if (Auth::check() && Auth::user()->usertype === 'admin'){
    $penghunis = Penghuni::find($id);
    $penghunis->id_penghuni = $request->id_penghuni;
    $penghunis->nama_penghuni = $request->nama_penghuni;
    $penghunis->nik = $request->nik;
    $penghunis->no_hp_penghuni = $request->no_hp_penghuni;
    $penghunis->jenis_kelamin = $request->jenis_kelamin;
    $penghunis->id_akun = $request->id_akun;
    $penghunis->id_kamar = $request->id_kamar;
    $penghunis->update();

    return redirect()->route('penghuni.tampil');
}else{
    return view('penghuni.tampil');
}
    }
}
