@extends('layoutpenghuni.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Ulasan dan Rating</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('rating.tampil', $kamar->id_kamar) }}">Kelola Ulasan</a></li>
                    <li class="breadcrumb-item active">Isi Ulasan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h2>Berikan Ulasan Anda</h2>
    <p>Silakan beri rating dan ulasan untuk layanan atau fasilitas yang Anda gunakan.</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="m-0">Isi Rating dan Ulasan</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('rating.submit', $kamar->id_kamar) }}" method="POST">
                    @csrf
                    <!-- Input Rating -->
                    <h5>Pilih Kenyamanan:</h5>
                    <div class="stars mb-3" data-category="kenyamanan">
                        @for ($i = 1; $i <= 5; $i++)
                        @endfor
                    </div>
                    <input type="numeric" name="kenyamanan" id="kenyamanan" value="" placeholder="1-5">

                    <h5>Pilih Kebersihan:</h5>
                    <div class="stars mb-3" data-category="kebersihan">
                        @for ($i = 1; $i <= 5; $i++)
                        @endfor
                    </div>
                    <input type="numeric" name="kebersihan" id="kebersihan" value="" placeholder="1-5">

                    <h5>Pilih Keamanan:</h5>
                    <div class="stars mb-3" data-category="keamanan">
                        @for ($i = 1; $i <= 5; $i++)
                        @endfor
                    </div>
                    <input type="numeric" name="keamanan" id="keamanan" value="" placeholder="1-5">

                    <h5>Pilih Rating:</h5>
                    <div class="stars mb-3" data-category="rating">
                        @for ($i = 1; $i <= 5; $i++)
                        @endfor
                    </div>
                    <input type="numeric" name="rating" id="rating" value="" placeholder="1-5">

                    <!-- Input Ulasan -->
                    <h5>Tulis Ulasan:</h5>
                    <textarea name="ulasan" class="form-control" rows="4" placeholder="Tulis ulasan Anda di sini..." required></textarea>

                    <!-- Tombol Kirim -->
                    <button type="submit" class="btn btn-primary w-100 mt-3">Kirim Ulasan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const categories = ['kenyamanan', 'kebersihan', 'keamanan', 'rating'];

        categories.forEach(category => {
            const starsContainer = document.querySelector(`.stars[data-category="${category}"]`);
            const stars = starsContainer.querySelectorAll('.star');
            const input = document.getElementById(category);

            stars.forEach(star => {
                star.addEventListener('click', () => {
                    const rating = star.dataset.value;
                    input.value = rating;

                    // Update UI: Highlight selected stars
                    stars.forEach(s => {
                        s.classList.toggle('selected', s.dataset.value <= rating);
                    });
                });
            });
        });
    });
</script>
<style>
    .stars {
        display: flex;
        gap: 5px;
        font-size: 24px;
        cursor: pointer;
    }
    .star {
        color: #ccc;
        transition: color 0.3s;
    }
    .star.selected {
        color: gold;
    }
</style>
@endsection
