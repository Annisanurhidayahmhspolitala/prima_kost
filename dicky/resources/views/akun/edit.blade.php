@extends('layout')

@section('konten')

<h4>Edit Akun</h4>

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

    <button class="btn btn-primary">Edit</button>
</form>

@endsection