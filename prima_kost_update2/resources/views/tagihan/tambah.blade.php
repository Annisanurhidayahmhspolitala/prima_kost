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
                    <li class="breadcrumb-item active">Kelola tagihan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h4 class="mb-4">Tambah Tagihan</h4>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Tambah Tagihan</h4>
        </div>
        <div class="card-body">
    <form action="{{ route('tagihan.submit') }}" method="post">
        @csrf
        <label>Id_Tagihan</label>
        <input type="number" name="id_tagihan" class="form-control mb-2">
        <label>Jumlah_tagihan</label>
        <input type="number" name="jumlah_tagihan" class="form-control mb-2">
        <label>Tanggal_Tagihan</label>
        <input type="date" name="tanggal_tagihan" class="form-control mb-2">
        <label>Tenggat_Tagihan</label>
        <input type="date" name="tenggat_tagihan" class="form-control mb-2">
        <label>Id_Penghuni</label>
        <input type="number" name="id_penghuni" class="form-control mb-2">

        <button class="btn btn-primary w-100">Tambah</button>
    </form>
        </div>
    </div>
</div>

@endsection