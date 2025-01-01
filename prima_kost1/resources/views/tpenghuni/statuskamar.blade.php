@extends('layoutpenghuni.konten')
@section('konten')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Kamar - Kost Prima</title>
    <!-- Link to Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .container {
            margin: ;
        }

        .flex-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .main-image {
            flex: 1 1 730px;
            position: relative;
            text-align: center;
            color: white;
            max-width: 730px;
            height: auto;
        }

        .main-image img {
            width: 100%;
            height: 380px;
            border-radius: 8px;
            object-fit: cover;
        }

        .main-image div {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 30px; /* Adjusted font size */
            font-weight: 900; /* Use Inter Black font weight */
            line-height: 1.5; /* Improved line height for spacing */
            text-align: center; /* Center the text */
            padding: 0 20px; /* Added padding for better readability */
        }

        .main-image p {
            margin: 0;
            line-height: 1.4;
        }

        .room-card {
            flex: 1 1 300px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
            padding: 15px;
        }

        .room-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .room-card h3 {
            margin: 10px 0;
        }

        .room-card p {
            margin: 5px 0;
        }

        .status {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-weight: bold;
            margin: 10px 0;
        }

        .dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            display: inline-block;
        }

        .dot.red {
            background-color: red;
        }

        .dot.green {
            background-color: green;
        }

        .rating-display {
            display: flex;
            align-items: center;
            gap: 5px;
            justify-content: center;
            margin-top: 10px;
        }

        .star {
            font-size: 20px;
            color: #bbb;
        }

        .star.selected {
            color: gold;
        }
    </style>
</head>
<body>
    
    <div class="header" style="background-color: black">
        <br>
        <div class="container">
            <h3 style="color: rgb(255, 255, 255)">Kamar minimalis di Kost Prima menawarkan desain sederhana namun fungsional, dengan tempat tidur nyaman, lemari, dan meja kerja.</h3>
            <p style="color: rgb(255, 255, 255)">Warna netral dan tata ruang efisien menciptakan suasana luas dan nyaman, cocok bagi Anda yang mengutamakan kenyamanan <br> dalam kesederhanaan.</p>
        </div>
        <br>
    </div>
    <div class="container">
        <br>
        <!-- Flex container -->
        <div class="flex-container" style="margin-bottom: 50px;">
            <!-- Gambar Utama -->
            <div class="main-image text-bold font-inter">
                <img src="https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg" alt="Gambar Kost">
                <div>
                    Pilih Kost terbaik yang nyaman dan aman sesuai dengan
                    keinginan anda
                </div>
            </div>

            <!-- Room Cards -->
            @foreach ($kamar as $room)
            <div class="room-card">
                <img src="https://i.pinimg.com/736x/2a/98/a6/2a98a6dd3479f95236f48367ac91fd89.jpg" alt="Gambar Kamar">
                <h3>Kamar {{ $room->no_kamar }}</h3>
                <p>Harga: Rp {{ number_format($room->harga_kamar, 0, ',', '.') }}</p>
                <div class="status">
                    @if ($room->status_kamar === "ditempati")
                    <span class="dot red"></span> Ditempati
                    @else
                    <span class="dot green"></span> Tersedia
                    @endif
                </div>
                <div class="rating-display">
                    @for ($i = 1; $i <= 5; $i++)
                    <span class="star {{ $i <= round($room->average_rating) ? 'selected' : '' }}">★</span>
                    @endfor
                    <small>({{ number_format($room->average_rating, 1) }})</small>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
@endsection
