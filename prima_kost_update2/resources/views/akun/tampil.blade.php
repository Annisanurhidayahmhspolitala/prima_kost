@extends('layouts.konten')

@section('konten')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Kelola Akun</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Kelola Akun</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content-header -->
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Data Akun</h4>
    </div>

    <div class="card-body">
        <table class="table table-bordered text-center"> 
            <thead class="table-primary"> 
                <tr>
                    <th>No</th>
                    <th>Id_akun</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($akuns as $no => $data)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $data->id_akun }}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->username }}</td>
                    <td>{{ $data->password }}</td>
                    <td>{{ $data->level }}</td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <a href="{{ route('akun.edit', $data->id_akun) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('akun.delete', $data->id_akun) }}" method="post">
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
        <a class="btn btn-success" href="{{ route('akun.tambah') }}">+ Tambah Akun</a>
    </div>
</div>

@endsection
