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
                            <label for="id">Id Akun</label>
                            <input type="text" name="id" id="id" class="form-control @error('id') is-invalid @enderror" value="{{ old('id') }}">
                            @error('id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="name">Nama</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="usertype">Level</label>
                            <select name="usertype" id="usertype" class="form-control @error('usertype') is-invalid @enderror">
                                <option value="">Pilih Level</option>
                                <option value="admin" {{ old('usertype') == 'admin' ? 'selected' : '' }}>Admin</option>
                                <option value="penghuni" {{ old('usertype') == 'penghuni' ? 'selected' : '' }}>Penghuni</option>
                            </select>
                            @error('usertype')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        

                        <div class="mb-2">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-2">
                            <label for="password_confirmation">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                        </div>

                        <button class="btn btn-primary w-100">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
