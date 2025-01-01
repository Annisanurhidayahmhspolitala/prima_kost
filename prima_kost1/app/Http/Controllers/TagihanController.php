<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\tagihan;
use App\Models\Penghuni;
use App\Models\pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TagihanController extends Controller
{
    function tampil(){
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $tagihans = tagihan::get();
        return view('tagihan.tampil', compact('tagihans'));
    }else{
        return view('tagihan.tampil');
    }
        }

    function tambah(){
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $penghuni = Penghuni::get();
        return view('tagihan.tambah', compact('penghuni'));
    }else{
        return view('tagihan.tambah');
    }
        }

    function submit(Request $request) {

    $penghuni = Penghuni::find($request->id_penghuni);
    $tagihans = new tagihan();
    $tagihans->jumlah_tagihan = $request->jumlah_tagihan;
    $tagihans->tanggal_tagihan = $request->tanggal_tagihan;
    $tagihans->tenggat_tagihan = $request->tenggat_tagihan;
    $tagihans->id_penghuni = $request->id_penghuni;
    $tagihans->nama_penghuni = $penghuni->nama_penghuni;
    $tagihans->save();

    return redirect()->route('tagihan.tampil');
    }

    function edit($id_tagihan){
        if (Auth::check() && Auth::user()->usertype === 'admin'){
        $tagihans = tagihan::find($id_tagihan);
        return view('tagihan.edit', compact('tagihans'));
    }else{
        return view('tagihan.edit');
    }
    }

    function update(Request $request, $id_tagihan){
    if (Auth::check() && Auth::user()->usertype === 'admin'){
    $tagihans = tagihan::find($id_tagihan);

    $tagihans->jumlah_tagihan = $request->jumlah_tagihan;
    $tagihans->tanggal_tagihan = $request->tanggal_tagihan;
    $tagihans->tenggat_tagihan = $request->tenggat_tagihan;
    $tagihans->id_penghuni = $request->id_penghuni;
    $tagihans->nama_penghuni = $request->nama_penghuni;
    $tagihans->update();

    return redirect()->route('tagihan.tampil');
}else{
    return view('tagihan.tampil');
}
    }

    function delete($id_tagihan){
        $tagihans = tagihan::find($id_tagihan);
        $tagihans->delete($id_tagihan);
        return redirect()->route('tagihan.tampil');
    }

    // Menampilkan form pembayaran
    public function bayar($id_tagihan){
        $tagihans = tagihan::findOrFail($id_tagihan);
        return view('tagihan.bayar', compact('tagihans'));
    }

    // Memproses pembayaran
    public function prosesBayar($id_tagihan){
        $tagihans = tagihan::with('pembayaran')->findOrFail($id_tagihan);

        $penghuni = Penghuni::find($tagihans->id_penghuni);

        if (!$tagihans->pembayaran) {
            $pembayaran = Pembayaran::create([
                'jumlah_pembayaran' => $tagihans->jumlah_tagihan,
                'metode_pembayaran' => 'tunai',
                'tanggal_pembayaran' => now(),
                'id_penghuni' => $tagihans->id_penghuni,
                'id_tagihan' => $tagihans->id_tagihan,
                'nama_penghuni' => $penghuni->nama_penghuni,
                'riwayat_pembayaran' => 'Lunas',
                'refrensi_pembayaran' => null,
            ]);
        }

        return redirect()->route('tagihan.tampil')->with('success', 'Pembayaran berhasil dilakukan.');
}
    
// Redirect dengan pesan sukses
    public function mbayar (){
        return redirect()->route('tagihan.tampil')->with('success', 'Pembayaran berhasil dilakukan.');
    }
}
