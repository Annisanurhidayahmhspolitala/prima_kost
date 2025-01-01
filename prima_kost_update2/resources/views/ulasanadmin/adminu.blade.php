@extends('layouts.konten') <!-- Pastikan layout admin yang benar -->

@section('konten')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Daftar Ulasan Penghuni</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item active">Ulasan Penghuni</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4 class="m-0">Ulasan Penghuni</h4>
        </div>
        <div class="card-body">

        <!-- Tabel Data Ulasan -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped text-center">
                <thead class="table-primary"> 
                <tr>
                    <th>No</th>
                    <th>Nama Penghuni</th>
                    <th>Kamar</th>
                    <th>keamanan</th>
                    <th>kenyamanan</th>
                    <th>kebersihan</th>
                    <th>Rating</th>
                    <th>Ulasan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ratings as $index => $rating)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $rating->penghuni->nama_penghuni }}</td>
                        <td>{{ $rating->kamar->no_kamar }}</td>
                        <td>
                            @for($i = 1; $i <= 5; $i++)
                            <span class="star {{ $i <= $rating->keamanan ? 'selected' : '' }}">★</span>
                            @endfor
                        </td>
                        <td>
                            @for($i = 1; $i <= 5; $i++)
                            <span class="star {{ $i <= $rating->kenyamanan ? 'selected' : '' }}">★</span>
                            @endfor
                        </td>
                        <td>
                            @for($i = 1; $i <= 5; $i++)
                                <span class="star {{ $i <= $rating->kebersihan ? 'selected' : '' }}">★</span>
                            @endfor
                        </td>
                        <td>
                            @for($i = 1; $i <= 5; $i++)
                                <span class="star {{ $i <= $rating->rating ? 'selected' : '' }}">★</span>
                            @endfor
                        </td>
                        <td>{{ $rating->ulasan }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    </div>
    </div>
</div>

    <style>
        .star {
            font-size: 20px;
            color: #bbb;
        }

        .star.selected {
            color: gold;
        }
    </style>
@endsection
