@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
    <div class="container-jasa animated-element">
        <div class="left-container">
            <h1 class="title">Jasa Tenaga Produksi</h1>
            <p class="description">
                Jika perusahaan Anda membutuhkan pasokan tenaga produksi yang handal dan efisien, kami siap menyediakan jasa tenaga produksi yang berkualitas tinggi dan terpercaya. Dengan tim yang terlatih dan berpengalaman, kami akan menjadi mitra yang dapat diandalkan untuk memenuhi kebutuhan produksi perusahaan Anda.
            <p class="description">
                Kami memastikan setiap tenaga produksi yang kami sediakan telah melewati seleksi ketat dan telah memiliki keterampilan yang sesuai dengan kebutuhan perusahaan Anda. Kolaborasi dengan kami bukan hanya tentang memperoleh tenaga kerja, tetapi juga tentang mendapatkan solusi yang tepat untuk meningkatkan efisiensi dan produktivitas dalam operasi produksi Anda.
        </div>
        <div class="right-container">
            <img src="{{asset('image/jasa/produksiLandscape.png')}}" alt="Gambar">
        </div>
    </div>

@include('layouts.footer')
@endsection
