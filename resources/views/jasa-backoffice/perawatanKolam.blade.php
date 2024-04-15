@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Perawatan Kolam</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Kolam diperusahaan anda mungkin merupakan tempat untuk bersantai, melepaskan lelah untuk karyawan dan sebagainya. Disini kami hadir untuk memberikan pelayanan perawatan kolam yang di dukung oleh tenaga profesional. Layanan kami dirancang untuk memberikan pengalaman yang baik dan nyaman. 
                </p>
                <p class="description">
                    Dengan tim kami yang ahli dalam bidang perawatan kolam, kami menawarkan solusi untuk menjamin, kejernihan air, kesehatan, dan keindahan kolam perusahaan anda. Selain menjaga kolam, kami juga menciptakan lingkungan yang mengundang nilai positif dan dapat menjadi nilai tambah bagi bisnis anda.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/comingSoon.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
