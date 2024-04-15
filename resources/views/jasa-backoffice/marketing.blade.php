@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Marketing</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Dengan layanan marketing, kami siao membantu perusahaan anda untuk bersaing dalam persaingan bisnis. Dalam layanan marketing kami tidak hanya mengiklankan produk ataupun layanan anda, tetapi kami juga menumbuhkan koneksi anda.      
            </p>
            <p class="description">
                Bersama kami sebagai mitra marketing, anda akan mendapatkan pelayanan yang disesuaikan kebutuhan anda dan hasil yang memuaskan. Biarkan kami membantu anda dalam mencapai tujuan pemasaran anda dan membangun hubungan yang erat dengan calon pelanggan dan pelanggan yang sudah ada.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/marketing.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection