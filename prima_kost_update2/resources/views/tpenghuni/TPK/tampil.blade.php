@extends('layouts.konten')

@section('konten')

<div class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1 class="m-0">Hasil AHP dan SAW</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
            <li class="breadcrumb-item active">Hasil AHP dan SAW</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Bobot Kriteria (AHP)</h4>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped text-center">
            <thead class="table-primary"> 
                <tr>
                    <th>No</th>
                    <th>Kriteria</th>
                    <th>Bobot</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eigenVector as $index => $bobot)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $criteria[$index] }}</td>
                    <td>{{ number_format($bobot, 4) }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Hasil Perhitungan (SAW)</h4>
    </div>

    <div class="card-body">
        <table id="example2" class="table table-bordered table-striped text-center">
            <thead class="table-primary"> 
                <tr>
                    <th>No</th>
                    <th>Kamar</th>
                    @foreach ($criteria as $criterion)
                    <th>{{ $criterion }}</th>
                    @endforeach
                    <th>Skor</th>
                    <th>Peringkat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rankedAlternatives as $rank => [$altIndex, $score])
                <tr>
                    <td>{{ $rank + 1 }}</td>
                    <td>{{ $alternatives[$altIndex]['Kamar'] }}</td>
                    @foreach ($criteria as $criterion)
                    <td>{{ number_format($alternatives[$altIndex][$criterion], 2) }}</td>
                    @endforeach
                    <td>{{ number_format($score, 4) }}</td>
                    <td>{{ $rank + 1 }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
