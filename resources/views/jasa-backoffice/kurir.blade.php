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
                Dalam berbisnis, kami sangat memahami bahwa waktu merupkan faktor  krusial yang dapat mempengaruhi kesuksesan di perusahaan. Kami juga memahami bahwa setiap keterlambatan dalam pengiriman dapat berdampak negatif pada reputasi,dan kepuasan klien ataupun calon klien. Karena permasalahan itulah kami hadir untuk mempermudah perjalanan bisnis anda dengan kurir yang berpengalaman dan dapat diandalkan.
            </p>
            <p class="description">
                Dengan menggunakan layanan yang kami sediakan, Anda tidak hanya mendapatkan jasa pengiriman, tetapi juga mitra yang akan memberikan dampak positif pada efisiensi operasional dan kepuasan pelanggan Anda. Kami berkomitmen untuk memberikan layanan yang tepat waktu, aman, dan berkualitas, sehingga Anda dapat fokus pada pengembangan bisnis Anda tanpa harus khawatir tentang pengiriman barang.
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
