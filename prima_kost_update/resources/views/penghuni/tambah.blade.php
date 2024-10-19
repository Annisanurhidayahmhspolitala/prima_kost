@extends('layout')

@section('konten')
    <h4>Tambah Penghuni</h4>

    <form action="{{ route('penghuni.submit') }}" method="post">
        @csrf
        <label>Id_Penghuni</label>
        <input type="number" name="id_penghuni" class="form-control mb-2">
        <label>Nama_Penghuni</label>
        <input type="text" name="nama_penghuni" class="form-control mb-2">
        <label>Nik</label>
        <input type="number" name="nik" class="form-control mb-2">
        <label>No_Hp_Penghuni</label>
        <input type="number" name="no_hp_penghuni" class="form-control mb-2">
        <label>Jenis_Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control mb-2">
        <label>Id_Akun</label>
        <input type="number" name="id_akun" class="form-control mb-2">
        <label>Id_Kamar</label>
        <input type="number" name="id_kamar" class="form-control mb-2">

        <button class="btn btn-primary">tambah</button>
    </form>
@endsection