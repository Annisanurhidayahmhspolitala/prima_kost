<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .main-footer {
            background-color: #1c1f24;
            color: #ffffff;
            padding: 20px 0;
        }
        .main-footer a {
            color: #ffffff;
            text-decoration: none;
        }
        .main-footer a:hover {
            text-decoration: underline;
        }
        .main-footer .footer-icons i {
            font-size: 20px;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .main-footer .footer-icons i:hover {
            color: #f39c12; /* Warna oranye saat hover */
        }
        .main-footer p {
            margin: 0;
            line-height: 1.8;
        }
        .main-footer .social-icons {
            display: flex;
            justify-content: center;
            gap: 15px;
        }
        .footer-line {
            border-top: 1px solid #444;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <!-- Main Footer -->
    <footer class="main-footer text-center">
        <div class="container">
            <!-- Informational Message -->
            <div class="mb-4">
                <p>#Jika Anda ingin booking kamar atau membutuhkan informasi lebih lanjut, silakan hubungi kontak kami yang tertera di bawah ini.</p>
            </div>
            <div class="row text-white">
                <!-- Contact Info -->
                <div class="col-md-4 mb-3">
                    <p><i class="fas fa-phone-alt"></i>  +6284-624-824-14</p>
                    <p><i class="fas fa-envelope"></i>  <a href="mailto:primakostofficial@gmail.com">primakostofficial@gmail.com</a></p>
                </div>
                <!-- Social Media -->
                <div class="col-md-4 mb-3">
                    <p>@primakostOfficial</p>
                    <div class="social-icons">
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <!-- Address -->
                <div class="col-md-4">
                    <p><i class="fas fa-map-marker-alt"></i> Komplek Sejahtera Mandiri, Jalur 1 No. 17, RT.12/RW.01, Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan</p>
                </div>
            </div>
            <div class="footer-line"></div>
            <!-- Copyright -->
            <p class="mb-0">&copy; 2024-2025 <a href="#">IT Project 4</a>. All rights reserved.</p>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
