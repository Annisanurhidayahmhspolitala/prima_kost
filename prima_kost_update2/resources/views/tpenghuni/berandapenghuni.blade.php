@extends('layoutpenghuni.konten')

@section('konten')

<!-- Hero Section -->
<div class="hero-section text-center text-light" style="background-color: #1a1a1a; padding: 40px 0;">
    <h1 class="mb-3">Kost Prima</h1>
    <p>Kost Prima adalah hunian nyaman dengan fasilitas lengkap seperti kamar modern, Wi-Fi cepat, layanan kebersihan, dan area parkir luas.</p>
    <p>Lokasinya strategis, dekat kampus, perkantoran, dan pusat perbelanjaan, menjadi pilihan ideal bagi mahasiswa dan profesional muda yang mencari kenyamanan dan kemudahan.</p>
</div>

<!-- Main Image -->
<div class="image-container text-center" style="margin: 30px 0;">
    <img src="https://i.pinimg.com/736x/9c/57/34/9c5734788f256a27774d00c4aa22ffe9.jpg" alt="Kost Prima" style="max-width: 100%; height: auto;">
</div>

<!-- Features Section -->
<div class="features text-center" style="padding: 40px 0; background-color: #f8f9fa;">
    <div class="container">
        <div class="row">
            <!-- Wi-Fi -->
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-wifi feature-icon" style="font-size: 40px; color: #000;"></i>
                    <h5>Wi-Fi Gratis 24/7</h5>
                    <p>Koneksi internet cepat tersedia untuk kebutuhan kerja maupun hiburan Anda.</p>
                </div>
            </div>
            <!-- Air Bersih -->
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-water feature-icon" style="font-size: 40px; color: #000;"></i>
                    <h5>Ketersediaan Air 24/7</h5>
                    <p>Air bersih selalu tersedia, memastikan kenyamanan Anda setiap hari.</p>
                </div>
            </div>
            <!-- Keamanan -->
            <div class="col-md-4">
                <div class="feature-box">
                    <i class="fas fa-lock feature-icon" style="font-size: 40px; color: #000;"></i>
                    <h5>Keamanan 24/7</h5>
                    <p>Keamanan selalu terjaga dengan sistem kontrol dan petugas keamanan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Image -->
<div class="image-container text-center" style="margin: 30px 0;">
    <img src="https://i.pinimg.com/736x/f2/48/2a/f2482ac117e64d9bade718ac5269766f.jpg">
</div>

<!-- Footer Section -->
<div class="footer text-center text-light" style="background-color: #1a1a1a; padding: 20px 0;">
    <p>Copyright ©2024 Kost Prima</p>
    <p>Komplek Sejahtera Mandiri, Jalan No. 1, RT.12/RW.01, Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan</p>
</div>

@endsection
