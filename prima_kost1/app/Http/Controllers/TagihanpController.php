<?php

namespace App\Http\Controllers;

use Midtrans\Snap;
use App\Models\tagihan;
use App\Models\Penghuni;
use App\Models\pembayaran;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TagihanpController extends Controller
{
    // Fungsi untuk menampilkan tagihan
    public function ptagihan()
    {
        // Ambil data penghuni berdasarkan id_akun dari pengguna yang login
        $penghuni = Auth::user()->penghuni;

        if (!$penghuni) {
            return redirect()->route('home')->with('error', 'Data penghuni tidak ditemukan.');
        }

        $tagihans = Tagihan::with('pembayaran')->where('id_penghuni', $penghuni->id_penghuni)->get();

        // Kirim data tagihan dan status pembayaran ke view
        return view('tpenghuni.tagihanpenghuni', compact('tagihans'));
    }

    // Fungsi untuk memproses pembayaran
    public function bayarp($id_tagihan)
    {
        // Ambil data tagihan berdasarkan id_tagihan
        $tagihans = tagihan::with('pembayaran')->findOrFail($id_tagihan);
        // Ambil data penghuni yang terkait dengan tagihan
        $penghuni = Penghuni::find($tagihans->id_penghuni);

        if (!$tagihans->pembayaran) {
            // Buat data pembayaran baru
            $pembayaran = pembayaran::create([
                'jumlah_pembayaran' => $tagihans->jumlah_tagihan,
                'metode_pembayaran' => 'transfer',
                'tanggal_pembayaran' => now(),
                'id_penghuni' => $tagihans->id_penghuni,
                'id_tagihan' => $tagihans->id_tagihan,
                'nama_penghuni' => $penghuni->nama_penghuni,
                'riwayat_pembayaran' => 'Belum Lunas',
                'refrensi_pembayaran' => null,
            ]);
        } else {
            $pembayaran = pembayaran::findOrFail($tagihans->pembayaran->id_pembayaran);
        }

        // Set konfigurasi Midtrans
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;

        // Set parameter transaksi
        $params = array(    
            'transaction_details' => array(
                'order_id' => $pembayaran->id_pembayaran,
                'gross_amount' => (int)$pembayaran->jumlah_pembayaran, 
            )
        );

        // Mendapatkan Snap Token
        $snapToken = Snap::getSnapToken($params);

        // Update pembayaran dengan Snap Token
        $pembayaran->update([
            'refrensi_pembayaran' => $snapToken,
        ]);

        // Kirim data ke view
        $penghuni = Auth::user()->penghuni;
        $kamar = Penghuni::find($penghuni->id_penghuni);

        return view('tpenghuni.mbayar', compact('snapToken', 'tagihans', 'kamar'));
    }

    // Fungsi untuk mengarahkan setelah pembayaran
    public function mbayar(Request $request, $id_tagihan)
    {
        $serverKey = config('midtrans.server_key');
        $hashed = hash('sha512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        if ($hashed === $request->signature_key) {
            // Proses pembayaran
            $pembayaran = Pembayaran::find($request->order_id);

            if (!$pembayaran) {
                return redirect()->route('TampilPenjualan')->with('error', 'Data pembayaran tidak ditemukan.');
            }

            $pembayaran->update([
                'Status_Pembayaran' => 'Lunas',
            ]);
        }
        // Ambil data kamar penghuni yang terkait
        $penghuni = Auth::user()->penghuni;
        $kamar = Penghuni::find($penghuni->id_penghuni);

        // Redirect ke halaman ulasan
        return view('tpenghuni.ulasan', compact('kamar'));
    }
}
