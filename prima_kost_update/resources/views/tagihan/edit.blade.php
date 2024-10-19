@extends('layout')

@section('konten')
    <h4>Tambah Tagihan</h4>

    <form action="{{ route('tagihan.update', $tagihans->id_tagihan) }}" method="post">
        @csrf
        <label>Id_Tagihan</label>
        <input type="number" name="id_tagihan" value="{{ $tagihans->id_tagihan }}" class="form-control mb-2">
        <label>Jumlah_tagihan</label>
        <input type="text" name="jumlah_tagihan" value="{{ $tagihans->jumlah_tagihan }}" class="form-control mb-2">
        <label>Tanggal_Tagihan</label>
        <input type="date" name="tanggal_tagihan" value="{{ $tagihans->tanggal_tagihan }}" class="form-control mb-2">
        <label>Tenggat_Tagihan</label>
        <input type="date" name="tenggat_tagihan" value="{{ $tagihans->tenggat_tagihan }}" class="form-control mb-2">
        <label>Id_Penghuni</label>
        <input type="number" name="id_penghuni" value="{{ $tagihans->id_penghuni }}" class="form-control mb-2">
        
        <button class="btn btn-primary">Tambah</button>
    </form>
@endsection