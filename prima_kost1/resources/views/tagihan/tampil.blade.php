@extends('layouts.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Kelola Tagihan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Kelola Tagihan</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Data Tagihan</h4>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead class="table-primary"> 
                <tr>
                    <th>No</th>
                    <th>Id Tagihan</th>
                    <th>Jumlah Tagihan</th>
                    <th>Tanggal Tagihan</th>
                    <th>Tenggat Tagihan</th>
                    <th>Nama Penghuni</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tagihans as $no=>$data)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $data->id_tagihan }}</td>
                    <td>Rp {{ number_format($data->jumlah_tagihan, 0, ',', '.') }}</td>
                    <td>{{ $data->tanggal_tagihan }}</td>
                    <td>{{ $data->tenggat_tagihan }}</td>
                    <td>{{ $data->nama_penghuni }}</td>
                    <td>
                        <a href="{{ route('tagihan.bayar', $data->id_tagihan) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-money-bill-wave"></i>
                        </a>
                        <div class="d-inline-flex">
                            <a href="{{ route('tagihan.edit', $data->id_tagihan) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('tagihan.delete', $data->id_tagihan) }}" method="post" onsubmit="return confirm('Yakin ingin menghapus Tagihan ini?')">
                                @csrf
                                @method('DELETE')
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
        <a class="btn btn-success" href="{{ route('tagihan.tambah') }}">+ Tambah Tagihan</a>
    </div>
</div>

@endsection
