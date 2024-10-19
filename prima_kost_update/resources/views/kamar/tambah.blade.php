@extends('layout')

@section('konten')

<h4>Tambah Informasi Kamar</h4>

<form action="{{ route('kamar.submit') }}" method="post">
    @csrf
    <label>Id_Kamar</label>
    <input type="number" name="id_kamar" class="form-control mb-2">
    <label>Info_Kamar</label>
    <input type="text" name="info_kamar" class="form-control mb-2">
    <label>No_Kamar</label>
    <select name="no_kamar" class="form-select mb-2" required>
        <option value="">Pilih Kamar</option>
        <option value="01">01</option>
        <option value="02">02</option>
        <option value="03">03</option>
        <option value="04">04</option>
        <option value="05">05</option>
        <option value="06">06</option>
        <option value="07">07</option>
        <option value="08">08</option>
        <option value="09">09</option>
        <option value="10">10</option>
    </select>
    <label>Harga_Kamar</label>
    <input type="number" name="harga_kamar" class="form-control mb-2">
    <label>Status_Kamar</label>
    <select name="status_kamar" class="form-select mb-2" required>
        <option value="">Pilih Status</option>
        <option value="tersedia">Tersedia</option>
        <option value="ditempati">Ditempati</option>
    </select>
    <button class="btn btn-primary" type="submit">Tambah</button>
</form>

@endsection