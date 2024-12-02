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
            <li class="breadcrumb-item active">Kelola Kamar</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Data Kamar</h4>
    </div>

    <div class="card-body">
        <table class="table table-bordered text-center"> 
            <thead class="table-primary"> 
                <tr>
                    <th>No</th>
                    <th>Id_Kamar</th>
                    <th>Info Kamar</th>
                    <th>No Kamar</th>
                    <th>Harga Kamar</th>
                    <th>Status Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($kamars as $no => $data)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $data->id_kamar }}</td>
                    <td>{{ $data->info_kamar }}</td>
                    <td>{{ $data->no_kamar }}</td>
                    <td>{{ $data->harga_kamar }}</td>
                    <td>{{ $data->status_kamar }}</td>
                    <td>
                        <div class="d-inline-flex">
                            <a href="{{ route('kamar.edit', $data->id_kamar) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('kamar.delete', $data->id_kamar) }}" method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer text-start">
        <a class="btn btn-success" href="{{ route('kamar.tambah') }}">+ Tambah Kamar</a>
    </div>
</div>

@endsection
