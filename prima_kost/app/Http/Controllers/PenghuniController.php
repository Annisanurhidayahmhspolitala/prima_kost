<?php

namespace App\Http\Controllers;

use App\Models\Penghuni;    
use Illuminate\Http\Request;

class PenghuniController extends Controller
{
    function tampil(){
        $penghunis = Penghuni::get();
        return view('penghuni.tampil', compact('penghunis'));
        }

    function tambah(){
        return view('penghuni.tambah');
        }

    function submit(Request $request) {
    $penghunis = new Penghuni();
    $penghunis->id_penghuni = $request->id_penghuni;
    $penghunis->nama_penghuni = $request->nama_penghuni;
    $penghunis->nik = $request->nik;
    $penghunis->no_hp_penghuni = $request->no_hp_penghuni;
    $penghunis->jenis_kelamin = $request->jenis_kelamin;
    $penghunis->id_kamar = $request->id_kamar;
    $penghunis->save();

    return redirect()->route('penghuni.tampil');
    }

    function edit($id){
        $penghunis = Penghuni::find($id);
        return view('penghuni.edit', compact('penghunis'));
    }

    function update(Request $request, $id){
    $penghunis = Penghuni::find($id);
    $penghunis->id_penghuni = $request->id_penghuni;
    $penghunis->nama_penghuni = $request->nama_penghuni;
    $penghunis->nik = $request->nik;
    $penghunis->no_hp_penghuni = $request->no_hp_penghuni;
    $penghunis->jenis_kelamin = $request->jenis_kelamin;
    $penghunis->id_kamar = $request->id_kamar;
    $penghunis->update();

    return redirect()->route('penghuni.tampil');
    }

    function delete($id){
        $penghunis = Penghuni::find($id);
        $penghunis->delete($id);
        return redirect()->route('penghuni.tampil');
    }
}
