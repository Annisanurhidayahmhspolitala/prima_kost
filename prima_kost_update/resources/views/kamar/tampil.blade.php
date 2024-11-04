@extends('layout')

@section('konten')

<div class="d-flex">
    <h4>Data kamar</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('kamar.tambah') }}">Tambah Kamar</a>
    </div>
</div>

<div class="card-body">
    <table class="table table-bordered text-center"> 
        <thead class="table-primary"> 
        <th>No</th>
        <th>Id_Kamar</th>
        <th>Info_Kamar</th>
        <th>No_Kamar</th>
        <th>Harga_Kamar</th>
        <th>Status_Kamar</th>
        <th>Aksi</th>
    </tr>
    @foreach($kamars as $no=>$data)
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
                    <i class="fas fa-edit"></i></a>
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
</table>

@endsection