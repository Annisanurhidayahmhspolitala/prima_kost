@extends('layout')

@section('konten')

<div class="container mt-4">
    <h4>Riwayat Pembayaran</h4>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>No</th>
                <th>Jumlah Pembayaran</th>
                <th>Metode Pembayaran</th>
                <th>Tanggal Pembayaran</th>
                <th>Id_Penghuni</th>
                <th>Id_Tagihan</th>
                <th>Riwayat</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($pembayarans as $no => $pembayaran)
            <tr>
                <td>{{ $no+1 }}</td>
                <td>{{ number_format($pembayaran->jumlah_pembayaran, 2) }}</td>
                <td>{{ $pembayaran->metode_pembayaran }}</td>
                <td>{{ $pembayaran->tanggal_pembayaran }}</td>
                <td>{{ $pembayaran->id_penghuni }}</td>
                <td>{{ $pembayaran->id_tagihan }}</td>
                <td>{{ $pembayaran->riwayat_pembayaran }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Belum ada riwayat pembayaran.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
