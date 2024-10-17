@extends('layout')

@section('konten')
    <h4>Tambah Tagihan</h4>

    <form action="{{ route('tagihan.submit') }}" method="post">
        @csrf
        <label>Id_Tagihan</label>
        <input type="number" name="id_tagihan" class="form-control mb-2">
        <label>Jumlah_tagihan</label>
        <input type="number" name="jumlah_tagihan" class="form-control mb-2">
        <label>Tanggal_Tagihan</label>
        <input type="date" name="tanggal_tagihan" class="form-control mb-2">
        <label>Tenggat_Tagihan</label>
        <input type="date" name="tenggat_tagihan" class="form-control mb-2">
        <label>Id_Penghuni</label>
        <input type="number" name="id_penghuni" class="form-control mb-2">

        <button class="btn btn-primary">tambah</button>
    </form>
@endsection