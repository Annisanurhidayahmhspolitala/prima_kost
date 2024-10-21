<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\PembayaranController;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/', 'beranda')->name('beranda');


//route crud penghuni
Route::get('/penghuni', [PenghuniController::class, 'tampil'])->name('penghuni.tampil');
Route::get('/penghuni/tambah', [PenghuniController::class, 'tambah'])->name('penghuni.tambah');
Route::post('/penghuni/submit', [PenghuniController::class, 'submit'])->name('penghuni.submit');
Route::get('/penghuni/edit/{id}', [PenghuniController::class, 'edit'])->name('penghuni.edit');
Route::post('/penghuni/update/{id}', [PenghuniController::class, 'update'])->name('penghuni.update');
Route::post('/penghuni/delete/{id}', [PenghuniController::class, 'delete'])->name('penghuni.delete');

//route crud akun
Route::get('/akun', [AkunController::class, 'tampil'])->name('akun.tampil');
Route::get('/akun/tambah', [AkunController::class, 'tambah'])->name('akun.tambah');
Route::post('/akun/submit', [AkunController::class, 'submit'])->name('akun.submit');
Route::get('/akun/edit/{id}', [AkunController::class, 'edit'])->name('akun.edit');
Route::post('/akun/update/{id}', [AkunController::class, 'update'])->name('akun.update');
Route::post('/akun/delete/{id}', [AkunController::class, 'delete'])->name('akun.delete');

//route crud kamar
Route::get('/kamar', [KamarController::class, 'tampil'])->name('kamar.tampil');
Route::get('/kamar/tambah', [KamarController::class, 'tambah'])->name('kamar.tambah');
Route::post('/kamar/submit', [KamarController::class, 'submit'])->name('kamar.submit');
Route::get('/kamar/edit/{id}', [KamarController::class, 'edit'])->name('kamar.edit');
Route::post('/kamar/update/{id}', [KamarController::class, 'update'])->name('kamar.update');
Route::post('/kamar/delete/{id}', [KamarController::class, 'delete'])->name('kamar.delete');

//route crud tagihan
Route::get('/tagihan', [TagihanController::class, 'tampil'])->name('tagihan.tampil');
Route::get('/tagihan/tambah', [TagihanController::class, 'tambah'])->name('tagihan.tambah');
Route::post('/tagihan/submit', [TagihanController::class, 'submit'])->name('tagihan.submit');
Route::get('/tagihan/edit/{id}', [TagihanController::class, 'edit'])->name('tagihan.edit');
Route::post('/tagihan/update/{id}', [TagihanController::class, 'update'])->name('tagihan.update');
Route::post('/tagihan/delete/{id}', [TagihanController::class, 'delete'])->name('tagihan.delete');
// Route untuk menampilkan halaman pembayaran
Route::get('/tagihan/{id}/bayar', [TagihanController::class, 'bayar'])->name('tagihan.bayar');
// Route untuk memproses pembayaran
Route::post('/tagihan/{id}/bayar', [TagihanController::class, 'prosesBayar'])->name('tagihan.prosesBayar');

// Route untuk menampilkan halaman riwayat pembayaran
Route::get('/pembayaran/riwayat', [PembayaranController::class, 'riwayat'])->name('riwayat_pembayaran.riwayat');


