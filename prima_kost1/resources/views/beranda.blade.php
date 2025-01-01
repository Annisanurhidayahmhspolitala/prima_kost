@extends('layouts.konten')
@section('konten')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Beranda</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a>Beranda</a></li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
      
    <!-- Main content -->
    <section class="content container">
        <div class="container container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>{{$kamar}} Kamar</h3>
                  <p>Kamar Terisi</p>
                </div>
                <div class="icon">
                  <i class="fas fa-bed"></i>
                </div>
                <a href="{{ route('kamar.tampil') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>Rp {{ number_format($duit, 0, '.', '.') }}</h3>
                  <p>Total Pembayaran Penghuni</p>
                </div>
                <div class="icon">
                  <i class="fas fa-file-invoice"></i>
                </div>
                <a href="{{ route('riwayat_pembayaran.riwayat') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $user }} Akun</h3>
                  <p>Akun Terdaftar</p>
                </div>
                <div class="icon">
                  <i class="fas fa-user"></i>
                </div>
                <a href="{{ route('akun.tampil') }}" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Main row -->
          <div class="row" style="display: flex;">
            <section class="col-lg-7 connectedSortable">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                    Sales
                  </h3>
                  <div class="card-tools">
                    <ul class="nav nav-pills ml-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content p-0">
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                      <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            
            <!-- Memastikan ukuran card visitor sama dengan card sebelahnya -->
            <section class="col-lg-5 connectedSortable" style="display: flex; flex-direction: column;">
              <div class="card bg-gradient-primary" style="flex-grow: 1; display: flex; flex-direction: column;">
                <div class="card-header border-0">
                  <h3 class="card-title">
                    <i class="fas fa-map-marker-alt mr-1"></i>
                    Lokasi Prima Kost
                  </h3>
                  <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                      <i class="far fa-calendar-alt"></i>
                    </button>
                    <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body" style="flex-grow: 1; height: 100%;">
                  <!-- Memastikan iframe mengisi tinggi card -->
                  <iframe 
                    src="https://www.google.com/maps?q=-3.7966825,114.7758933&hl=es;z=14&output=embed" 
                    style="border:0; width: 100%; height: 100%;" 
                    allowfullscreen="" 
                    loading="lazy">
                  </iframe>
                </div>
              </div>
            </section>
          </div>
        </div>
    </section>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
          // Chart initialization (replace with your data and configurations)
          const revenueCtx = document.getElementById('revenue-chart-canvas').getContext('2d');
          const salesCtx = document.getElementById('sales-chart-canvas').getContext('2d');

          new Chart(revenueCtx, {
              type: 'line',
              data: {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                  datasets: [{
                      label: 'Revenue',
                      data: [10, 20, 30, 40, 50],
                      borderColor: 'rgba(75, 192, 192, 1)',
                      backgroundColor: 'rgba(75, 192, 192, 0.2)',
                  }]
              }
          });

          new Chart(salesCtx, {
              type: 'bar',
              data: {
                  labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
                  datasets: [{
                      label: 'Sales',
                      data: [5, 15, 25, 35, 45],
                      backgroundColor: 'rgba(153, 102, 255, 0.2)',
                      borderColor: 'rgba(153, 102, 255, 1)',
                      borderWidth: 1
                  }]
              }
          });
      });
    </script>
@endsection
