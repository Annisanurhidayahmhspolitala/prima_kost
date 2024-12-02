@extends('layouts.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Kelola Kamar</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
            <li class="breadcrumb-item active"><a href="{{ route('kamar.tampil') }}">Kelola Kamar</a></li>
            <li class="breadcrumb-item active">Edit Kamar</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container mt-4">
    <h4 class="mb-4">Edit Kamar</h4>

  <div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Edit Informasi Kamar</h4>
        </div>

        <div class="card-body">
<form action="{{ route('kamar.update', $kamars->id_kamar) }}" method="post">
    @csrf
    <label>Id_Kamar</label>
    <input type="text" name="id_kamar" value="{{ $kamars->id_kamar }}" class="form-control mb-2">
    <label>Info_Kamar</label>
    <input type="text" name="info_kamar" value="{{ $kamars->info_kamar }}" class="form-control mb-2">
    <label>No_Kamar</label>
    <select name="no_kamar" class="form-select mb-2" required>
        <option>{{ $kamars->no_kamar }}</option>
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
    <br>
    <label>Harga_Kamar</label>
    <input type="number" name="harga_kamar" value="{{ $kamars->harga_kamar }}" class="form-control mb-2">
  </br>
    <label>Status_Kamar</label>
    <select name="status_kamar" class="form-select mb-2" required>
        <option>{{ $kamars->status_kamar }}</option>
        <option value="tersedia">Tersedia</option>
        <option value="ditempati">Ditempati</option>
    </select>
    <button class="btn btn-primary w-100" type="submit">Edit</button>
</form>
    </div>
  </div>
  </div>

@endsection