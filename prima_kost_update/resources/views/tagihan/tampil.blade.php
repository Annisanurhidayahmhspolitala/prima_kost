@extends('layout')

@section('konten')

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Data Tagihan</h4>
    </div>

    <div class="card-body">
        <table class="table table-bordered table-primary text-center"> <!-- Kelas table-primary ditambahkan -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Id Tagihan</th>
                    <th>Jumlah Tagihan</th>
                    <th>Tanggal Tagihan</th>
                    <th>Tenggat Tagihan</th>
                    <th>Id Penghuni</th>
                    <th>Aksi</th>
                    <th>Pembayaran</th>
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
                    <td>{{ $data->id_penghuni }}</td>
                    <td>
                        <div class="d-inline-flex">
                            <a href="{{ route('tagihan.edit', $data->id_tagihan) }}" class="btn btn-sm btn-warning me-1">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('tagihan.delete', $data->id_tagihan) }}" method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger" type="submit">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <a href="{{ route('tagihan.bayar', $data->id_tagihan) }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-money-bill-wave"></i> Bayar
                        </a>
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
