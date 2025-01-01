@extends('layoutpenghuni.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tagihan Anda</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Tagihan</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="m-0">Data Tagihan</h4>
        </div>
        <div class="card-body">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped text-center">
                    <thead class="table-primary"> 
                        <tr>
                            <th>No</th>
                            <th>Jumlah Tagihan</th>
                            <th>Tanggal Tagihan</th>
                            <th>Tenggat Tagihan</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tagihans as $no => $tagihan)
                        <tr>
                            <td>{{ $no + 1 }}</td>
                            <td>Rp {{ number_format($tagihan->jumlah_tagihan, 0, ',', '.') }}</td>
                            <td>{{ $tagihan->tanggal_tagihan }}</td>
                            <td>{{ $tagihan->tenggat_tagihan }}</td>
                            <td>
                                @if ($tagihan->pembayaran)
                                    @if($tagihan->pembayaran->riwayat_pembayaran == 'Lunas')
                                        <span class="badge badge-success">Lunas</span>
                                    @else
                                        <span class="badge badge-danger">Belum Lunas</span>
                                    @endif
                                @else
                                    <span class="badge badge-danger">Belum Lunas</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-inline-flex">
                                    @if ($tagihan->pembayaran && $tagihan->pembayaran->riwayat_pembayaran != 'Lunas')
                                        <form action="{{ route('pbayar', $tagihan->id_tagihan) }}" method="POST" class="me-1">
                                            @csrf
                                            <button class="btn btn-sm btn-primary">Bayar</button>
                                        </form>
                                    @elseif (!$tagihan->pembayaran)
                                        <form action="{{ route('pbayar', $tagihan->id_tagihan) }}" method="POST" class="me-1">
                                            @csrf
                                            <button class="btn btn-sm btn-primary">Bayar</button>
                                        </form>
                                    @else
                                        <button class="btn btn-sm btn-success" disabled>Lunas</button>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">Anda tidak memiliki tagihan.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>

@endsection
