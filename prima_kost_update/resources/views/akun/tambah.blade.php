@extends('layout')

@section('konten')

<h4>Tambah Akun</h4>

<form action="{{ route('akun.submit') }}" method="post">
    @csrf
    <label>Id_Akun</label>
    <input type="number" name="id_akun" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Email</label>
    <input type="text" name="email" class="form-control mb-2">
    <label>Username</label>
    <input type="text" name="username" class="form-control mb-2">
    <label>Password</label>
    <input type="password" name="password" class="form-control mb-2">
    <label>Level</label>
    <select name="level" class="form-select mb-2" required>
        <option value="">Pilih Level</option>
        <option value="admin">Admin</option>
        <option value="penghuni">Penghuni</option>
    </select>
    <button class="btn btn-primary">Tambah</button>
</form>

@endsection