@extends('layout')
@section('konten')

<div class="container-fluid">
    <div class="row">
       
        <!-- Room Listings -->
        <div class="row mt-5">

            <h3>Hari Ini</h3>
            <div class="col-md-4 mb-4">
                <div class="card bg-success text-white"> <!-- Warna hijau -->
                    <div class="card-body">
                        <h5 class="card-title">06 Terisi</h5>
                        <p class="card-text">Status Kamar</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-warning text-dark"> <!-- Warna kuning -->
                    <div class="card-body">
                        <h5 class="card-title">Rp.82.550.875</h5>
                        <p class="card-text">Laporan uang terkini</p>
                        <a href="#" class="btn btn-dark">Lihat Detail Laporan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-primary text-white"> <!-- Warna biru -->
                    <div class="card-body">
                        <h5 class="card-title">06</h5>
                        <p class="card-text">Akun Terdaftar</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="row mt-5">
            <h3>Contact Us</h3>
            <div class="col-md-6">
                <p>Whatsapp: <a href="https://wa.me/6285750782822" target="_blank">+62 85750782822</a></p>
            </div>
        </div>
    </div>
</div>

@endsection
