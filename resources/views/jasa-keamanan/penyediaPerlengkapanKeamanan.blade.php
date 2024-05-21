@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Penyedia Perlengkapan Keamanan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Dalam berbisnis keamanan merupakan prioritas utama diperusahaan kami. Perusahaan kami siap menjadi mitra yang handal dalam menyediakan perlengkapan keamanan satpam yang terbaik dan berkualitas. Selain itu kami juga berkomitment untuk memberikan solusi yang efektif dan efisien untuk meningkatkan peluang kemitraan yang berkelanjutan. 
            </p>
            <p class="description">
                Dapat dipastikan bahwa peralatan yang akan kami sediakan memiliki kualitas yang tinggi dan bukan barang bekas/murahan. Bergabunglah dengan  kami agar satpam diperusahaan anda mendapatkan peralatan keamanan yang berkualitas.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiPenyedia.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
