<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            width: 250px;
            background-color: #343a40;
            color: #ffffff;
            position: fixed;
        }
        .sidebar a {
            color: #ffffff;
            text-decoration: none;
        }
        .sidebar .nav-link.active {
            background-color: #495057;
        }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <nav class="sidebar d-flex flex-column p-3">
        <!-- Brand -->
        <a href="#" class="navbar-brand mb-4 fs-4">Kost Prima</a>
        
        <!-- Konten -->
        <h5 class="text-uppercase mb-3">Menu</h5>
        <ul class="nav flex-column mb-4">
            <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('akun.tampil') }}" class="nav-link">Kelola Akun</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('penghuni.tampil') }}" class="nav-link">Kelola Penghuni</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('kamar.tampil') }}" class="nav-link">Kelola Kamar</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tagihan.tampil') }}" class="nav-link">Kelola Tagihan</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Riwayat Pembayaran</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Pemilik Kost</a>
            </li>
        </ul>

        <!-- Akun -->
        <h5 class="text-uppercase mb-3">Akun</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="#" class="nav-link">Profil</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">Keluar</a>
            </li>
        </ul>
    </nav>

    <!-- Main Content -->
    <div class="flex-grow-1 p-4" style="margin-left: 250px;">
        {{-- <h1>Konten Utama</h1> --}}
        @yield('konten')
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
