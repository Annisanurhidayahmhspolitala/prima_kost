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
                    <li class="breadcrumb-item active">Edit Penghuni</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h4 class="mb-4">Edit Penghuni</h4>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Edit Informasi Penghuni</h4>
        </div>
        <div class="card-body">

    <form action="{{ route('penghuni.update', $penghunis->id_penghuni) }}" method="post">
        @csrf
        <label>Id_Penghuni</label>
        <input type="number" name="id_penghuni" value="{{ $penghunis->id_penghuni }}" class="form-control mb-2">
        <label>Nama_Penghuni</label>
        <input type="text" name="nama_penghuni" value="{{ $penghunis->nama_penghuni }}" class="form-control mb-2">
        <label>Nik</label>
        <input type="number" name="nik" value="{{ $penghunis->nik }}" class="form-control mb-2">
        <label>No_Hp_Penghuni</label>
        <input type="number" name="no_hp_penghuni" value="{{ $penghunis->no_hp_penghuni }}" class="form-control mb-2">
        <label>Jenis_Kelamin</label>
        <input type="text" name="jenis_kelamin" value="{{ $penghunis->jenis_kelamin }}" class="form-control mb-2">
        <label>Id_Akun</label>
        <input type="number" name="id_akun" value="{{ $penghunis->id_akun }}" class="form-control mb-2">
        <label>Id_Kamar</label>
        <input type="number" name="id_kamar" value="{{ $penghunis->id_kamar }}" class="form-control mb-2">

        <button class="btn btn-primary w-100">Edit</button>
    </form>
        </div>
    </div>
</div>
</div>

@endsection