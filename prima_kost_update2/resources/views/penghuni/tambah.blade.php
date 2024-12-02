@extends('layouts.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Penghuni</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('penghuni.tampil') }}">Kelola Penghuni</a></li>
                    <li class="breadcrumb-item active">Tambah Penghuni</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h4 class="mb-4">Tambah Penghuni</h4>

    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="m-0">Tambah Informasi Penghuni</h4>
            </div>
            <div class="card-body">
    <form action="{{ route('penghuni.submit') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-md-6">
                <label for="id_penghuni" class="form-label">ID Penghuni</label>
                <input type="number" id="id_penghuni" name="id_penghuni" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="nama_penghuni" class="form-label">Nama Penghuni</label>
                <input type="text" id="nama_penghuni" name="nama_penghuni" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="nik" class="form-label">NIK</label>
                <input type="number" id="nik" name="nik" class="form-control">
            </div>
            <div class="col-md-6">
                <label for="no_hp_penghuni" class="form-label">No. HP Penghuni</label>
                <input type="number" id="no_hp_penghuni" name="no_hp_penghuni" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="id_akun" class="form-label">ID Akun</label>
                <input type="number" id="id_akun" name="id_akun" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-6">
                <label for="id_kamar" class="form-label">ID Kamar</label>
                <input type="number" id="id_kamar" name="id_kamar" class="form-control">
            </div>
        </div>

        <button class="btn btn-primary w-100">Tambah</button>
    </form>
</div>
@endsection
