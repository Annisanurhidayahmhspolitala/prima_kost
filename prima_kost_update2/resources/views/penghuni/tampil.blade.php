@extends('layout')

@section('konten')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Data Penghuni</h4>
    </div>

    <div class="card-body">
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Penghuni</th>
                    <th>Nama Penghuni</th>
                    <th>NIK</th>
                    <th>No HP Penghuni</th>
                    <th>Jenis Kelamin</th>
                    <th>Id Akun</th>
                    <th>Id Kamar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penghunis as $no=>$data)
                <tr>
                    <td>{{ $no+1 }}</td>
                    <td>{{ $data->id_penghuni }}</td>
                    <td>{{ $data->nama_penghuni }}</td>
                    <td>{{ $data->nik }}</td>
                    <td>{{ $data->no_hp_penghuni }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->id_akun }}</td>
                    <td>{{ $data->id_kamar }}</td>
                    <td>
                        <div class="d-inline-flex">
                            <a href="{{ route('penghuni.edit', $data->id_penghuni) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('penghuni.delete', $data->id_penghuni) }}" method="post">
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
        <a class="btn btn-success" href="{{ route('penghuni.tambah') }}">+ Tambah Penghuni</a>
    </div>
</div>

@endsection
