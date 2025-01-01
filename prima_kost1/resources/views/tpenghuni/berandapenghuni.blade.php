@extends('layoutpenghuni.konten')
@section('konten')

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kost Prima</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <!-- Menambahkan font Inter dari Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    header {
      background-color: #f8f8f8;
      padding: 10px;
      text-align: center;
      border-bottom: 1px solid #ddd;
      animation: fadeInDown 1s;
    }

    .top-bar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
      padding: 0 20px;
    }

    .top-bar nav a {
      margin: 0 10px;
      text-decoration: none;
      color: #000;
    }

    .top-bar nav a:hover {
      text-decoration: underline;
    }

    .title {
      margin: 20px 0;
    }

    .hero {
      display: flex;
      justify-content: center;
      padding: 60px 20px;
      background-color: #1c1f24;
      color: #fff;
      animation: fadeIn 1.5s ease-out;
    }

    .hero-content {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 80px;
      width: 100%;
      animation: fadeInUp 1.5s ease-out;
    }

    .hero-image img {
      width: 350px;
      height: 270px;
      max-width: 500px;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      animation: zoomIn 1s ease-out;
    }

    .hero-text {
      max-width: 50%;
    }

    .hero-text h2 {
      font-size: 24px;
      margin-bottom: 10px;
      line-height: 1.4;
    }

    .hero-text p {
      font-size: 16px;
      line-height: 1.6;
    }

    .features {
      display: flex;
      justify-content: space-around;
      gap: 30px;
      padding: 40px 0;
      background-color: #f4f4f4;
      text-align: center;
      animation: fadeInUp 2s ease-out;
    }

    .feature {
      background-color: #fff;
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      width: 30%;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      animation: fadeInUp 2s ease-out;
    }

    .feature:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
    }

    .feature i {
      font-size: 40px;
      color: #4CAF50;
      margin-bottom: 15px;
    }

    .feature h3 {
      font-size: 20px;
      color: #333;
      margin-bottom: 10px;
    }

    .feature p {
      font-size: 16px;
      color: #666;
      line-height: 1.5;
    }

    @media (max-width: 768px) {
      .features {
        flex-direction: column;
        align-items: center;
      }

      .feature {
        width: 80%;
        margin-bottom: 20px;
      }
    }

    .cta {
      text-align: center;
      padding: 100px;
      background-image: url('https://www.pajak.com/storage/2023/03/937191_15081415160034286625.jpg');
      background-size: cover;
      background-position: center;
      color: #fff;
      font-size: 18px;
      animation: fadeInUp 1.5s ease-out;
    }

    .cta h2 {
      font-family: 'Inter', sans-serif; /* Menggunakan Inter font pada bagian CTA */
      font-weight: 900; /* Font bold Inter */
      font-size: 36px;
      line-height: 1.5;
    }

    .rooms {
      padding: 20px;
      background-color: #f9f9f9;
      animation: fadeInUp 2s ease-out;
    }

    .rooms h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .room-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      animation: fadeInUp 3s ease-out;
    }

    .room {
      width: 300px;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      background-color: #fff;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }

    .room:hover {
      transform: translateY(-10px) scale(1.05);
    }

    .room img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .room-content {
      padding: 15px;
    }

    .room-title {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .room-details {
      font-size: 14px;
      color: #666;
    }

    /* Animasi Slide-in dari kiri */
    @keyframes slideInFromLeft {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }
      100% {
        transform: translateX(0);
        opacity: 1;
      }
    }

    /* Animasi Fade-in dari bawah */
    @keyframes fadeInUp {
      0% {
        transform: translateY(30px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    /* Animasi Zoom-in untuk gambar */
    @keyframes zoomIn {
      0% {
        transform: scale(0.9);
        opacity: 0;
      }
      100% {
        transform: scale(1);
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <section class="hero">
    <div class="hero-content">
      <div class="hero-image">
        <img src="https://i.pinimg.com/736x/9c/57/34/9c5734788f256a27774d00c4aa22ffe9.jpg" alt="Rak dekorasi">
      </div>
      <div class="hero-text">
        <h2 class="text-bold font-inter">
          Kost Prima adalah hunian nyaman dengan <br> fasilitas lengkap seperti kamar modern, <br> Wi-Fi cepat, layanan kebersihan, dan area <br> parkir luas.
        </h2>
        <p class="font-inter">
          Lokasinya strategis, dekat kampus, perkantoran, dan <br> pusat perbelanjaan, menjadikannya pilihan ideal bagi <br> mahasiswa, siswa dan profesional muda yang mencari <br> kenyamanan dan kemudahan.
        </p>
      </div>
    </div>
  </section>

  <section class="features">
    <div class="feature">
        <i class="fas fa-wifi"></i>
        <h3>Wi-Fi Gratis 24/7</h3>
        <p>
            Hanya di kost kami! Cocok untuk kamu yang butuh akses internet cepat untuk kuliah, kerja, 
            atau hiburan tanpa batas. Hemat tanpa perlu mikir kuota lagi!
        </p>
    </div>
    <div class="feature">
        <i class="fas fa-water"></i>
        <h3>Ketersediaan Air 24/7</h3>
        <p>
            Di kost kami, air bersih selalu tersedia 24 jam. Cocok buat kamu yang butuh kenyamanan tanpa repot. 
            Mau mandi, mencuci, atau sekadar segarkan diri kapan saja? Semua bisa!
        </p>
    </div>
    <div class="feature">
        <i class="fas fa-shield-alt"></i>
        <h3>Keamanan 24/7</h3>
        <p>
            Prioritas kami adalah keamananmu! Di kost kami, dilengkapi dengan CCTV 24 jam dan security yang siap 
            menjaga setiap sudut. Kamu bisa tinggal dengan tenang tanpa khawatir soal keamanan barang dan privasi.
        </p>
    </div>
  </section>

  <section class="cta">
    <h2>Pilih Kost terbaik yang nyaman dan<br>aman sesuai dengan keinginan anda</h2>
  </section>
  <br>
  <section class="rooms">
    <h2 class="text-bold font-inter">Kamar Terbaik Yang Kami Rekomendasikan</h2>
    <br>
    <div class="room-list">
        @foreach($top3Kamar as $topKamar)
            <div class="room">
                <img src="{{ $topKamar[0]['image_url'] ?? 'https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg' }}" alt="Gambar Kamar {{ $topKamar[0]['Kamar'] }}">
                <div class="room-content">
                    <h3 class="room-title">{{ $topKamar[0]['Kamar'] }}</h3>
                    <p class="room-details">
                        Harga Kamar : {{ $topKamar[0]['luas'] ?? 'Rp.500.000' }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
  </section>
</body>
</html>
<br>
@endsection
