<?php

namespace App\Http\Controllers;

use App\Models\tagihan;
use App\Models\pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagihanController extends Controller
{
    function tampil(){
        $tagihans = tagihan::get();
        return view('tagihan.tampil', compact('tagihans'));
        }

    function tambah(){
        return view('tagihan.tambah');
        }

    function submit(Request $request) {
    $tagihans = new tagihan();
    $tagihans->id_tagihan = $request->id_tagihan;
    $tagihans->jumlah_tagihan = $request->jumlah_tagihan;
    $tagihans->tanggal_tagihan = $request->tanggal_tagihan;
    $tagihans->tenggat_tagihan = $request->tenggat_tagihan;
    $tagihans->id_penghuni = $request->id_penghuni;
    $tagihans->save();

    return redirect()->route('tagihan.tampil');
    }

    function edit($id_tagihan){
        $tagihans = tagihan::find($id_tagihan);
        return view('tagihan.edit', compact('tagihans'));
    }

    function update(Request $request, $id_tagihan){
    $tagihans = tagihan::find($id_tagihan);
    $tagihans->id_tagihan = $request->id_tagihan;
    $tagihans->jumlah_tagihan = $request->jumlah_tagihan;
    $tagihans->tanggal_tagihan = $request->tanggal_tagihan;
    $tagihans->tenggat_tagihan = $request->tenggat_tagihan;
    $tagihans->id_penghuni = $request->id_penghuni;
    $tagihans->update();

    return redirect()->route('tagihan.tampil');
    }

    function delete($id_tagihan){
        $tagihans = tagihan::find($id_tagihan);
        $tagihans->delete($id_tagihan);
        return redirect()->route('tagihan.tampil');
    }

    // Menampilkan form pembayaran
    public function bayar($id_tagihan)
    {
        $tagihans = tagihan::findOrFail($id_tagihan);
        return view('tagihan.bayar', compact('tagihans'));
    }

    // Memproses pembayaran
    public function prosesBayar(Request $request, $id_tagihan)

    {
        $tagihans = tagihan::findOrFail($id_tagihan);
        $request->validate([
            'id_penghuni' => 'required|exists:penghunis,id_penghuni', // Sesuaikan tabel dan kolom
            'metode_pembayaran' => 'required|string',
        ]);        

        Pembayaran::create([
            'jumlah_pembayaran' => $tagihans->jumlah_tagihan,
            'metode_pembayaran' => $request->metode_pembayaran,
            'tanggal_pembayaran' => now(),
            'id_penghuni' => $request->id_penghuni,
            'id_tagihan' => $tagihans->id_tagihan,
            'riwayat_pembayaran' => 'Pembayaran berhasil',
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('tagihan.tampil')->with('success', 'Pembayaran berhasil dilakukan.');
    }
}
