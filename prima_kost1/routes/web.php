<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TpkController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\RiwayatpController;
use App\Http\Controllers\TagihanpController;
use App\Http\Controllers\PembayaranController;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');

//route ulasan
Route::get('/admin/ratings', [UlasanController::class, 'index'])->name('admin.ratings.index');

//route crud penghuni
Route::get('/penghuni', [PenghuniController::class, 'tampil'])->name('penghuni.tampil');
Route::get('/penghuni/tambah', [PenghuniController::class, 'tambah'])->name('penghuni.tambah');
Route::post('/penghuni/submit', [PenghuniController::class, 'submit'])->name('penghuni.submit');
Route::get('/penghuni/edit/{id}', [PenghuniController::class, 'edit'])->name('penghuni.edit');
Route::post('/penghuni/update/{id}', [PenghuniController::class, 'update'])->name('penghuni.update');
Route::delete('/penghuni/delete/{id}', [PenghuniController::class, 'delete'])->name('penghuni.delete');

//route crud akun
Route::get('/akun', [AkunController::class, 'tampil'])->name('akun.tampil');
Route::get('/akun/tambah', [AkunController::class, 'tambah'])->name('akun.tambah');
Route::post('/akun/submit', [AkunController::class, 'submit'])->name('akun.submit');
Route::get('/akun/edit/{id}', [AkunController::class, 'edit'])->name('akun.edit');
Route::post('/akun/update/{id}', [AkunController::class, 'update'])->name('akun.update');
Route::delete('/akun/delete/{id}', [AkunController::class, 'delete'])->name('akun.delete');

//route crud kamar
Route::get('/kamar', [KamarController::class, 'tampil'])->name('kamar.tampil');
Route::get('/kamar/tambah', [KamarController::class, 'tambah'])->name('kamar.tambah');
Route::post('/kamar/submit', [KamarController::class, 'submit'])->name('kamar.submit');
Route::get('/kamar/edit/{id}', [KamarController::class, 'edit'])->name('kamar.edit');
Route::post('/kamar/update/{id}', [KamarController::class, 'update'])->name('kamar.update');
Route::delete('/kamar/delete/{id}', [KamarController::class, 'delete'])->name('kamar.delete');

//route crud tagihan
Route::get('/tagihan', [TagihanController::class, 'tampil'])->name('tagihan.tampil');
Route::get('/tagihan/tambah', [TagihanController::class, 'tambah'])->name('tagihan.tambah');
Route::post('/tagihan/submit', [TagihanController::class, 'submit'])->name('tagihan.submit');
Route::get('/tagihan/edit/{id}', [TagihanController::class, 'edit'])->name('tagihan.edit');
Route::post('/tagihan/update/{id}', [TagihanController::class, 'update'])->name('tagihan.update');
Route::delete('/tagihan/delete/{id}', [TagihanController::class, 'delete'])->name('tagihan.delete');

// Route untuk menampilkan halaman pembayaran
Route::get('/tagihan/{id}/bayar', [TagihanController::class, 'bayar'])->name('tagihan.bayar');

// Route untuk memproses pembayaran
Route::post('/tagihan/{id}/bayar', [TagihanController::class, 'prosesBayar'])->name('tagihan.prosesBayar');
Route::get('/prosesbayar/{id}/bayar', [TagihanController::class, 'mbayar'])->name('tagihan.mbayar');

// route untuk menampilkan halaman riwayat pembayaran
Route::get('/pembayaran/riwayat', [PembayaranController::class, 'riwayat'])->name('riwayat_pembayaran.riwayat');

// route controller dan kontroller penghuni
Route::get('/tagihanp', [TagihanpController::class, 'ptagihan'])->name('tagihanpenghuni');
Route::post('/bayarp/{id}', [TagihanpController::class, 'bayarp'])->name('pbayar');
Route::get('/bayarpenghuni/{id}/bayar', [TagihanpController::class, 'mbayar'])->name('abayar');
Route::get('/riwayatp', [RiwayatpController::class, 'riwayat'])->name('riwayatp');
});

Route::get('/beranda', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/statuskamar', [StatusController::class, 'statusk'])->name('statuskamar');

//route rating
Route::get('/rating/{id_kamar}/isi', [RatingController::class, 'show'])->name('rating.isi');
Route::post('/rating/{id_kamar}/submit', [RatingController::class, 'submit'])->name('rating.submit');
Route::get('/rating/{id_kamar}/tampil', [RatingController::class, 'index'])->name('rating.tampil');

//tpk
Route::get('/hasil-spk', [TpkController::class, 'calculate'])->name('tpk.tampil');
Route::get('/', [TpkController::class, 'Beranda'])->name('berandap');

//profile
Route::get('/profile', [ProfileController::class, 'detail'])->name('profile');
