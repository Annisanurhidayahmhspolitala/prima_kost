@extends('layoutpenghuni.konten')

@section('konten')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kost Prima</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #090830;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .hero-section {
            background-color: #333;
            color: white;
            padding: 80px 0;
            text-align: center;
            background-image: url('https://i.pinimg.com/736x/20/6e/e8/206ee8503c87ee66394c1eae81d56885.jpg');
            background-size: cover;
            background-position: center;
        }

        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .hero-section p {
            font-size: 1.2rem;
            line-height: 1.6;
        }

        .features {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .feature-icon {
            font-size: 48px;
            color: #007bff;
        }

        .feature-box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

        .feature-box h5 {
            font-size: 1.5rem;
            margin-top: 20px;
            font-weight: bold;
        }

        .footer {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .footer p {
            font-size: 1rem;
        }

        .image-container img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 10px;
            margin-top: 30px;
            transition: transform 0.3s ease;
        }

        .image-container img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

<!-- Hero Section -->
<div class="hero-section">
    <h1>Kost Prima</h1>
    <p>Kost Prima adalah hunian nyaman dengan fasilitas lengkap seperti kamar modern, Wi-Fi cepat, layanan kebersihan, dan area parkir luas.</p>
    <p>Lokasinya strategis, dekat kampus, perkantoran, dan pusat perbelanjaan, menjadi pilihan ideal bagi mahasiswa dan profesional muda yang mencari kenyamanan dan kemudahan.</p>
</div>

<!-- Features Section -->
<div class="features text-center">
    <div class="container">
        <div class="row">
            <!-- Wi-Fi -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="feature-box">
                    <i class="fas fa-wifi feature-icon"></i>
                    <h5>Wi-Fi Gratis 24/7</h5>
                    <p>Koneksi internet cepat tersedia untuk kebutuhan kerja maupun hiburan Anda.</p>
                </div>
            </div>
            <!-- Air Bersih -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="feature-box">
                    <i class="fas fa-water feature-icon"></i>
                    <h5>Ketersediaan Air 24/7</h5>
                    <p>Air bersih selalu tersedia, memastikan kenyamanan Anda setiap hari.</p>
                </div>
            </div>
            <!-- Keamanan -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="feature-box">
                    <i class="fas fa-lock feature-icon"></i>
                    <h5>Keamanan 24/7</h5>
                    <p>Keamanan selalu terjaga dengan sistem kontrol dan petugas keamanan.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Additional Image -->
<div class="image-container">
    <img src="https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg" alt="Fasilitas Kost">
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script>
</body>
</html>

@endsection
