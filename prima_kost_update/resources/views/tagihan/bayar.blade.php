<!-- resources/views/tagihan/bayar.blade.php -->

@extends('layout')

@section('konten')

<div class="container mt-4">
    <h2>Pembayaran Tagihan</h2>
    <p>Tagihan: Rp {{ number_format($tagihans->jumlah_tagihan, 0, ',', '.') }}</p>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('tagihan.prosesBayar', $tagihans->id_tagihan) }}" method="POST">
        @csrf
        <input type="text" name="id_penghuni"> <!-- Asumsikan pengguna yang login adalah penghuni -->

        <div class="form-group">
            <label for="jumlah_pembayaran">Jumlah Pembayaran</label>
            <input type="number" class="form-control" id="jumlah_pembayaran" name="jumlah_pembayaran" placeholder="Masukkan jumlah pembayaran" required>
        </div>

        <div class="form-group mt-3">
            <label for="metode_pembayaran">Metode Pembayaran</label>
            <select class="form-control" id="metode_pembayaran" name="metode_pembayaran" required>
                <option value="transfer_bank">Transfer Bank</option>
                <option value="tunai">Tunai</option>
                <option value="dompet_digital">Dompet Digital</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Bayar</button>
    </form>
</div>

@endsection
