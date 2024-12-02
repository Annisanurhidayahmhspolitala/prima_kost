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
                    <li class="breadcrumb-item active">Tambah Akun</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <h4 class="mb-4">Tambah Akun</h4>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Tambah Informasi Akun</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('akun.submit') }}" method="post">
                @csrf
                <div class="mb-2">
                    <label>Id Akun</label>
                    <input type="number" name="id_akun" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="mb-2">
                    <label>Level</label>
                    <select name="level" class="form-select" required>
                        <option value="">Pilih Level</option>
                        <option value="admin">Admin</option>
                        <option value="penghuni">Penghuni</option>
                    </select>
                </div>
                <button class="btn btn-primary w-100">Tambah</button>
            </form>
        </div>
    </div>
</div>


@endsection
