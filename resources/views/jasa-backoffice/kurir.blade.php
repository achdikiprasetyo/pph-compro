@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Kurir</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Dalam berbisnis kami paham bahwa waktu dan keandalan pengiriman suatu barang merupakan hal yang sangatlah penting. Karena permasalahan itulah kami hadir untuk mempermudah perjalanan bisnis anda dengan kurir yang berpengalaman dan dapat diandalkan.
            </p>
            <p class="description">
                Dengan menggunakan layanan yang telah kami sediakan, anda tidaklah hanya mendapatkan sekadar jasa pengiriman, melainkan kemitraan yang akan memberikan efek positif pada efisiensi operasional dan client anda.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/kurir.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
