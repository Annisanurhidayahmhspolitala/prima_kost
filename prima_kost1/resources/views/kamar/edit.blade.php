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
    <div class="mb-2">
      <label for="no_kamar" class="form-label">No Kamar</label>
      <select id="no_kamar" name="no_kamar" class="form-control" required>
          <option value="" disabled>Pilih Kamar</option>
          <option value="{{ $kamars->no_kamar }}" {{ old('no_kamar') == $kamars->no_kamar ? 'selected' : '' }}>
              {{ $kamars->no_kamar }}
          </option>
          <option value="01" {{ old('no_kamar') == '01' ? 'selected' : '' }}>01</option>
          <option value="02" {{ old('no_kamar') == '02' ? 'selected' : '' }}>02</option>
          <option value="03" {{ old('no_kamar') == '03' ? 'selected' : '' }}>03</option>
          <option value="04" {{ old('no_kamar') == '04' ? 'selected' : '' }}>04</option>
          <option value="05" {{ old('no_kamar') == '05' ? 'selected' : '' }}>05</option>
          <option value="06" {{ old('no_kamar') == '06' ? 'selected' : '' }}>06</option>
          <option value="07" {{ old('no_kamar') == '07' ? 'selected' : '' }}>07</option>
          <option value="08" {{ old('no_kamar') == '08' ? 'selected' : '' }}>08</option>
          <option value="09" {{ old('no_kamar') == '09' ? 'selected' : '' }}>09</option>
          <option value="10" {{ old('no_kamar') == '10' ? 'selected' : '' }}>10</option>
      </select>
  </div>
    <label>Harga_Kamar</label>
    <input type="number" name="harga_kamar" value="{{ $kamars->harga_kamar }}" class="form-control mb-2">
  <div class="mb-2">
    <label for="status_kamar" class="form-label">Status Kamar</label>
    <select id="status_kamar" name="status_kamar" class="form-control" required>
        <option value="" disabled>Pilih Status</option>
        <option value="{{ $kamars->status_kamar }}" {{ old('status_kamar') == $kamars->status_kamar ? 'selected' : '' }}>
            {{ $kamars->status_kamar }}
        </option>
        <option value="tersedia" {{ old('status_kamar') == 'tersedia' ? 'selected' : '' }}>Tersedia</option>
        <option value="ditempati" {{ old('status_kamar') == 'ditempati' ? 'selected' : '' }}>Ditempati</option>
    </select>
</div>
    <button class="btn btn-primary w-100" type="submit">Edit</button>
</form>
    </div>
  </div>
  </div>
  </div>

@endsection