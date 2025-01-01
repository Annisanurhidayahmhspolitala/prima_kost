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
                    <li class="breadcrumb-item active">Tambah Tagihan</li>
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
        <label>Jumlah tagihan</label>
        <input type="number" name="jumlah_tagihan" class="form-control mb-2">
        <label>Tanggal Tagihan</label>
        <input type="date" name="tanggal_tagihan" class="form-control mb-2">
        <label>Tenggat Tagihan</label>
        <input type="date" name="tenggat_tagihan" class="form-control mb-2">
        <div class="mb-2">
            <label for="id_penghuni" class="form-label">Nama Penghuni</label>
            <select class="form-control" id="id_penghuni" name="id_penghuni" required>
                <option value="" disabled selected>Pilih Penghuni</option>
                @foreach ($penghuni as $nama)
                    <option value="{{ $nama->id_penghuni }}" {{ old('id_penghuni') == $nama->id_penghuni ? 'selected' : '' }}>
                        {{ $nama->nama_penghuni }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary w-100">Tambah</button>
    </form>
        </div>
    </div>
</div>
</div>
@endsection