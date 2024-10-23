@extends('layout')
@section('konten')

<div class="container-fluid">
    <div class="row">
       
        <!-- Room Listings -->
        <div class="row mt-5">
            <h3>Hari Ini</h3>
            <div class="col-md-4 mb-4">
                <div class="card bg-success text-white"> <!-- Warna hijau -->
                    <div class="card-body">
                        <h5 class="card-title">06 Terisi</h5>
                        <p class="card-text">Status Kamar</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-warning text-dark"> <!-- Warna kuning -->
                    <div class="card-body">
                        <h5 class="card-title">Rp.82.550.875</h5>
                        <p class="card-text">Laporan uang terkini</p>
                        <a href="#" class="btn btn-dark">Lihat Detail</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card bg-primary text-white"> <!-- Warna biru -->
                    <div class="card-body">
                        <h5 class="card-title">06</h5>
                        <p class="card-text">Akun Terdaftar</p>
                        <a href="#" class="btn btn-light">Lihat Detail</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik Keuangan Bulanan -->
        <div class="row mt-5">
            <h3>Laporan Keuangan Bulanan</h3>
            <div class="col-md-12">
                <canvas id="financialChart" width="400" height="200"></canvas>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="row mt-5">
            <h3>Contact Us</h3>
            <div class="col-md-6">
                <p>Whatsapp: <a href="https://wa.me/6285750782822" target="_blank">+62 85750782822</a></p>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan script untuk Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('financialChart').getContext('2d');
    var financialChart = new Chart(ctx, {
        type: 'line', // Tipe grafik garis
        data: {
            labels: ['Januari', 'Februari', 'Maret','April', 'Mei','Juni'], // Nama-nama bulan
            datasets: [
                {
                    label: 'Pemasukan',
                    data: [50000000, 60000000, 30000000, 20000000, 30000000, 40000000], // Data pemasukan
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna area di bawah garis pemasukan
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna garis pemasukan
                    borderWidth: 2,
                    fill: true, // Menampilkan area di bawah garis
                    tension: 0.3 // Melengkungkan garis
                },
                {
                    label: 'Pengeluaran',
                    data: [20000000, 25000000, 30000000, 22000000, 32000000, 4000000], // Data pengeluaran
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna area di bawah garis pengeluaran
                    borderColor: 'rgba(255, 99, 132, 1)', // Warna garis pengeluaran
                    borderWidth: 2,
                    fill: true, // Menampilkan area di bawah garis
                    tension: 0.3 // Melengkungkan garis
                }
            ]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            animation: {
                duration: 2000, // Durasi animasi dalam milidetik
                easing: 'easeInOutBounce' // Jenis animasi
            }
        }
    });
</script>

@endsection
