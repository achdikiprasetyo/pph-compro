@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Konsultasi Keamanan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">


                Keamanan merupakan sebuah prioritas utama dalam perusahaan kami. Maka dari itu kami menawarkan sebuah layanan konsultasi keamanan  kepada perseorangan ataupun perusahan dengan peralatan kemanan dan teknologi serta prosedur pengamanan suatu objek yang akan disesuaikan dengan kondisi area dan perjajian dengan klien.

            </p>
            <p class="description">
                Dalam konsultasi keamanan, kami akan memberian identifikasi proses bisnis , penilaian kerentanan, identifikasi karakteristik aset, analisis ancaman, penilaian resiko, rencana pengamanan dan analisis pengendalian.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiKonsultasi.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
