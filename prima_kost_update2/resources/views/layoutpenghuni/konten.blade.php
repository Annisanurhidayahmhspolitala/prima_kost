<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css?v=3.2.0') }}">
  <style>
    body {
      font-family: 'Source Sans Pro', sans-serif;
      background-color: #003366; /* Warna biru gelap */
      color: #0e081f; /* Pastikan teks terlihat jelas pada latar belakang gelap */
    }
    .hero {
      background-color: #212529;
      color: white;
      text-align: center;
      padding: 50px 20px;
    }
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    .feature-icon {
      font-size: 2rem;
      color: #17a2b8;
    }
    .features {
      background-color: #002244; /* Warna biru gelap yang lebih terang */
      padding: 30px 20px;
      border-radius: 8px;
    }
    .features h5 {
      font-weight: bold;
    }
    .image-overlay {
      position: relative;
      text-align: center;
      color: white;
    }
    .image-overlay img {
      width: 100%;
      opacity: 0.8;
    }
    .image-overlay .overlay-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-size: 1.8rem;
      font-weight: bold;
    }
    .footer {
      background-color: #002244; /* Warna biru gelap */
      color: white;
      padding: 30px 20px;
      text-align: center;
    }
  </style>
</head>

<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  @include('layoutpenghuni.navbar')
  <!-- /.navbar -->

  <div class="content-wrapper">
    @yield('konten')

  <!-- Main Footer -->
  @include('layoutpenghuni.footer')
</div>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/js/adminlte.min.js?v=3.2.0') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/js/demo.js') }}"></script>
</body>
</html>
