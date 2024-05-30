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
                Dalam berbisnis, kami sangat memahami bahwa waktu merupkan faktor yang krusial yang dapat mempengaruhi kesuksesan di perusahaan. Kami juga memahami bahwa setiap keterlambatan dalam pengiriman dapat berdampak negatif pada reputasi,dan kepuasan klien ataupun calon klien. Karena permasalahan itulah kami hadir untuk mempermudah perjalanan bisnis anda dengan kurir yang berpengalaman dan dapat diandalkan.
            </p>
            <p class="description">
                Dengan menggunakan layanan yang telah kami sediakan, anda tidaklah hanya mendapatkan sekadar jasa pengiriman, tetapi juga merupakan mitra yang akan memberikan dampak positif pada efisiensi operasional dan kepuasan pelanggan Anda.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/kurir.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
