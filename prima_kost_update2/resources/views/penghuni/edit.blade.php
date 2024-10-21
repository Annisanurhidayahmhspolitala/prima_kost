@extends('layout')

@section('konten')
    <h4>Tambah Penghuni</h4>

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

        <button class="btn btn-primary">tambah</button>
    </form>
@endsection