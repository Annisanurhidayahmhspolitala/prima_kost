<!-- resources/views/tagihan/bayar.blade.php -->

@extends('layoutpenghuni.konten')

@section('konten')

<script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{config('midtrans.client_key')}}"></script>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('tagihanpenghuni')}}"> Tagihan</a></li>
                    <li class="breadcrumb-item active">Pembayaran</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>

    
    <div class="container mt-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
            <h4 class="m-0">Bayar Tagihan </h4>
            </div>

            <div class="container mt-4">
                <h2>Tagihan Anda</h2>
                <div style="margin-left: 30px">
                    <h3>Rp {{ number_format($tagihans->jumlah_tagihan, 0, ',', '.') }}</h3>
                </div>
            
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

            <div class="card-body">
            <button id="pay-button" class="btn btn-primary w-100">Bayar!</button>
        </div>
            </div>
    </div>
    </div>
</div>
            </div>
            </div>

            <script type="text/javascript">
                // For example trigger on button clicked, or any time you need
                var payButton = document.getElementById('pay-button');
                payButton.addEventListener('click', function () {
                  // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
                window.snap.pay('{{$snapToken}}', {
                    onSuccess: function(result){
                      /* You may add your own implementation here */
                    alert("payment success!"); console.log(result);
                    window.location.href = "{{ route('rating.isi', $kamar->id_kamar) }}"
                    },
                    onPending: function(result){
                      /* You may add your own implementation here */
                    alert("wating your payment!"); console.log(result);
                    },
                    onError: function(result){
                      /* You may add your own implementation here */
                    alert("payment failed!"); console.log(result);
                    },
                    onClose: function(){
                      /* You may add your own implementation here */
                    alert('you closed the popup without finishing the payment');
                    }
                })
                });
            </script>

@endsection
