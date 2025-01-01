@extends('layoutpenghuni.konten')
@section('konten')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Import Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4; /* Warna latar belakang lebih terang */
            color: #333; /* Warna teks utama lebih gelap */
            font-family: 'Roboto', sans-serif; /* Gunakan font Roboto */
        }
        .profile-card {
            max-width: 500px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            background-color: #ffffff; /* Warna putih untuk kartu profil */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .profile-header {
            margin-bottom: 20px;
        }
        .profile-header h3 {
            font-size: 20px;
            margin-bottom: 0;
            color: #555; /* Warna teks abu-abu gelap */
            font-weight: 700; /* Teks bold */
            text-align: left; /* Posisi teks ke kiri */
        }
        .profile-header span {
            font-weight: 500; /* Berat font untuk label "Nama Penghuni:" */
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            font-size: 16px;
            margin-bottom: 5px;
            display: block;
            color: #555; /* Warna label abu-abu gelap */
        }
        .form-control {
            background-color: #f9f9f9; /* Warna latar input lebih terang */
            color: #333; /* Warna teks input lebih gelap */
            border: 1px solid #ddd; /* Border abu-abu */
            border-radius: 5px;
            padding: 10px;
        }
        .form-control:focus {
            border: 1px solid #007bff; /* Fokus biru */
            box-shadow: none;
            outline: none;
        }
    </style>
</head>
<br>
<body>
    <div class="container mt-5">
        <div class="profile-card">
            <div class="profile-header">
                <h3><span>Nama Penghuni :</span> <strong>{{ $penghuni->nama_penghuni }}</strong></h3>
            </div>
            <div class="profile-info text-start">
                <!-- NIK -->
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" class="form-control" value="{{ $penghuni->nik }}" readonly>
                </div>
                <!-- Nomor HP -->
                <div class="form-group">
                    <label for="no_hp_penghuni">Nomor HP</label>
                    <input type="text" id="no_hp_penghuni" name="no_hp_penghuni" class="form-control" value="{{ $penghuni->no_hp_penghuni }}" readonly>
                </div>
                <!-- Jenis Kelamin -->
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" class="form-control" value="{{ $penghuni->jenis_kelamin }}" readonly>
                </div>
                <!-- ID Kamar -->
                <div class="form-group">
                    <label for="id_kamar">ID Kamar</label>
                    <input type="text" id="id_kamar" name="id_kamar" class="form-control" value="{{ $penghuni->id_kamar }}" readonly>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<br>
@endsection
