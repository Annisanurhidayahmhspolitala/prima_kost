@extends('layouts.konten')

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
                    <li class="breadcrumb-item"><a href="{{ route('tagihan.tampil') }}">Kelola Tagihan</a></li>
                    <li class="breadcrumb-item active">Edit Tagihan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h4 class="mb-4">Edit Tagihan</h4>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Edit Tagihan</h4>
        </div>
        <div class="card-body">
    <form action="{{ route('tagihan.update', $tagihans->id_tagihan) }}" method="post">
        @csrf
        <label>Jumlah_tagihan</label>
        <input type="text" name="jumlah_tagihan" value="{{ $tagihans->jumlah_tagihan }}" class="form-control mb-2">
        <label>Tanggal_Tagihan</label>
        <input type="date" name="tanggal_tagihan" value="{{ $tagihans->tanggal_tagihan }}" class="form-control mb-2">
        <label>Tenggat_Tagihan</label>
        <input type="date" name="tenggat_tagihan" value="{{ $tagihans->tenggat_tagihan }}" class="form-control mb-2">
        <button class="btn btn-primary w-100">Edit</button>
    </form>
        </div>
    </div>
</div>
</div>

@endsection