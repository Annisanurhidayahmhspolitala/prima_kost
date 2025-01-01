@extends('layoutpenghuni.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Tagihan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('tagihan.tampil') }}">Kelola Tagihan</a></li>
                    <li class="breadcrumb-item active">Pembayaran</a></li>
                    
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h2>Tagihan Penghuni</h2>
    <div style="margin-left: 30px">
        <h3>Rp {{ number_format($tagihans->jumlah_tagihan, 0, ',', '.') }}</h3>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container mt-4">
        <h4 class="mb-4">Pembayaran Tagihan</h4>
    
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="m-0">Bayar Tagihan </h4>
            </div>
            <div class="card-body">
    <form action="{{ route('pbayar ', $tagihans->id_tagihan) }}" method="POST">
        @csrf
        <button class="btn btn-primary w-100">Bayar</button>
    </form>
</div>
        </div>
    </div>
    </div>
</div>

@endsection
