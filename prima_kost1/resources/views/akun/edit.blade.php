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
<form action="{{ route('akun.update', $akun->id) }}" method="post">
    @csrf
    <label>Nama</label>
    <input type="text" name="name" value="{{ $akun->name }}" class="form-control mb-2">
    <label>Email</label>
    <input type="text" name="email" value="{{ $akun->email }}" class="form-control mb-2">
    <label>Password</label>
    <input type="password" name="password" value="{{ $akun->password }}" class="form-control mb-2">
    <button class="btn btn-primary w-100">Edit</button>
</form>
        </div>
    </div>
</div>
</div>

@endsection