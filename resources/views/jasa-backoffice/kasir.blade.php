@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Kasir</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Keamanan dalam bertransaksi merupakan prioritas kami. Dengan menggunakan Kasir yang disediakan oleh perusahaan kami, anda akan mendapatkan tenaga yang memberikan efisiensi serta kemudahan dalam perusahaan anda. Kami juga mengerti waktu dan uang merupakan suatu hal yang sangat berharga, maka dari itu kami menyediakan solusi hemat biaya dan efisiensi waktu pada proses transaksi berlangsung. 
                </p>

        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/kasir.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
