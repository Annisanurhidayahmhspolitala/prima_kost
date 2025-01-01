<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Style agar navigasi tetap di atas */
        .main-header {
            position: sticky;
            top: 0;
            z-index: 1030; /* Tetap berada di atas elemen lain */
            background-color: #ffffff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Tambahkan padding agar tidak terlalu rapat */
        .navbar-nav .nav-item {
            margin-right: 15px;
        }

        /* Style tombol logout */
        .logout-button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 6px 12px;
            font-size: 14px;
            border-radius: 5px;
            display: flex;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: #c82333;
        }

        .logout-button i {
            margin-right: 6px;
        }
    </style>
</head>
<body>
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
        <a class="navbar-brand">
            <img src="{{ asset('assets/img/logo1.jpg') }}" alt="logo" class="brand-image img-circle elevation-3" style="opacity: .9">
            <span class="brand-text font-weight-light">KOST PRIMA</span>
        </a>
    
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
        <li class="nav-item">
                <a href="{{ route('beranda') }}" class="nav-link">Beranda</a>
            </li>
            <li class="nav-item">
                <a href="{{ route('statuskamar') }}" class="nav-link">Status Kamar</a>
            </li>
            @if (Auth::check() && Auth::user()->usertype === 'penghuni')
                <li class="nav-item">
                    <a href="{{ route('tagihanpenghuni') }}" class="nav-link">Tagihan</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('riwayatp') }}" class="nav-link">Riwayat Pembayaran</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('profile') }}" class="nav-link">{{ Auth::user()->name }}</a>
                </li>
                <style>
                    .nav-item {
                        display: flex;
                        align-items: center;
                    }
                
                    .logout-button {
                        background-color: #dc3545;
                        color: #fff;
                        border: none;
                        padding: 6px 12px;
                        font-size: 14px;
                        border-radius: 5px;
                        display: flex;
                        align-items: center;
                        text-decoration: none;
                        cursor: pointer;
                    }
                
                    .logout-button:hover {
                        background-color: #c82333;
                    }
                
                    .logout-button i {
                        margin-right: 6px;
                    }
                </style>
                
                <li class="nav-item">
                    <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="logout-button">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </button>
                    </form>
                </li>  

                {{-- <div class="top-bar text-rigth'>
                    <div id="current-time">22:45:04 - 14 January 2022</div>
                </div> --}}
            @else
                <li class="nav-item">
                    <a href="{{ route('login') }}" class="nav-link">Login</a>
                </li>
            @endif
        </div>
        </div>
        <div id="greeting" class="text-center py-3" style="background-color: #f8f9fa;">
            <p class="mb-0"></p>
        </div>
    </nav>

</body>
</html>
