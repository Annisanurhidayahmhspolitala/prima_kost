@extends('layout')

@section('konten')

    <div class="d-flex">
        <h4>Data Tagihan</h4>
        <div class="ms-auto">
            <a class="btn btn-success" href="{{ route('tagihan.tambah') }}">Tambah Tagihan</a>
        </div>
    </div>

    <table class="table table-bordered text-center">
        <tr>
            <th>No</th>
            <th>Id_Tagihan</th>
            <th>Jumlah_tagihan</th>
            <th>Tanggal_Tagihan</th>
            <th>Tenggat_Tagihan</th>
            <th>Id_Penghuni</th>
            <th>Aksi</th>
            <th>Pembayaran</th> <!-- Tambahkan kolom pembayaran -->
        </tr>
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
                    <i class="fas fa-edit"></i></a>
                <form action="{{ route('tagihan.delete', $data->id_tagihan) }}" method="post">
                @csrf
                <button class="btn btn-sm btn-danger" type="submit">
                    <i class="fas fa-trash"></i>
                </button>
                </form>
                </div>
            </td>
            <td>
                <!-- Tombol untuk melakukan pembayaran -->
                <a href="{{ route('tagihan.bayar', $data->id_tagihan) }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-money-bill-wave"></i> Bayar
                </a>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
