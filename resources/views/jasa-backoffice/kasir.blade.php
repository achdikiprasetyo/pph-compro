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
                    Dengan menggunakan layanan Kasir yang disediakan oleh perusahaan kami, anda akan mendapatkan sistem yang telah dirancang oleh kasir kami untuk memberikan efisiensi serta kemudahan dalam perusahaan anda. Kami juga mengerti waktu dan uang merupakan suatu hal yang sangat berharga, maka dari itu kami menyediakan solusi hemat biaya dan efisiensi waktu. 
                </p>
                <p class="description">
                    Keamanan dalam bertransaksi merupakan prioritas kami, dengan menggunakan layanan sales yang telah kami sediakan, perusahaan anda tidak hanya mendapatkan sistem kasir yang efisien, melainkan kemitraan yang mendukung pertumbuhan bisnis anda.
                </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/comingSoon.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
