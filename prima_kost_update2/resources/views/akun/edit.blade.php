@extends('layouts.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Kelola Akun</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('akun.tampil') }}">Kelola Akun</a></li>
                    <li class="breadcrumb-item active">Edit Akun</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h4 class="mb-4">Edit Akun</h4>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Edit Informasi Akun</h4>
        </div>
        <div class="card-body">
<form action="{{ route('akun.update', $akuns->id_akun) }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $akuns->nama }}" class="form-control mb-2">
    <label>Email</label>
    <input type="text" name="email" value="{{ $akuns->email }}" class="form-control mb-2">
    <label>Username</label>
    <input type="text" name="username" value="{{ $akuns->username }}" class="form-control mb-2">
    <label>Password</label>
    <input type="password" name="password" value="{{ $akuns->password }}" class="form-control mb-2">
    <select name="level" class="form-select mb-2" required>
        <option value="">Pilih Level</option>
        <option value="admin">Admin</option>
        <option value="penghuni">Penghuni</option>
    </select>
    <button class="btn btn-primary w-100">Edit</button>
</form>
        </div>
    </div>
</div>

@endsection