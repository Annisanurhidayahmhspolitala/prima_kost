@extends('layout')

@section('konten')

    <div class="d-flex">
        <h4>Data Penghuni</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{ route('penghuni.tambah') }}">Tambah Penghuni</a>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Id_Penghuni</th>
            <th>Nama_Penghuni</th>
            <th>NIK</th>
            <th>No_Hp_Penghuni</th>
            <th>Jenis_Kelamin</th>
            <th>Id_Akun</th>
            <th>Id_Kamar</th>
            <th>Aksi</th>
        </tr>
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
                    <i class="fas fa-edit"></i></a>
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
    </table>

@endsection