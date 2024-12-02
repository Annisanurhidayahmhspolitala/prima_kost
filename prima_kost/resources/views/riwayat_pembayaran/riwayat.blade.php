@extends('layouts.konten')

@section('konten')


<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Riwayat Tagihan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Riwayat Pembayaran</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Riwayat</h4>
        </div>
        <div class="card-body">

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card-body">
        <table class="table table-bordered text-center"> 
            <thead class="table-primary"> 
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
    </div>
    </div>
</div>


@endsection
