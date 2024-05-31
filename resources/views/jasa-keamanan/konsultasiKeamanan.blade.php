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


                Keamanan merupakan sebuah prioritas utama dalam perusahaan kami. Maka dari itu kami menawarkan sebuah layanan konsultasi keamanan  kepada perseorangan ataupun perusahan dengan peralatan kemanan dan teknologi serta prosedur pengamanan suatu objek yang akan disesuaikan dengan kondisi area dan perjanjian dengan klien.

            </p>
            <p class="description">
                Dalam konsultasi keamanan, kami menyediakan layanan berikut : <br>
                <ul>
                    <li>Identifikasi Proses Bisnis</li>
                    <li>Penilaian Kerentanan</li>
                    <li>Identifikasi Karakteristik Aset</li>
                    <li>Analisis Ancaman</li>
                    <li>Penilaian Resiko</li>
                    <li>Perencanaan Pengamanan</li>
                    <li>Analisis Pengendalian</li>
                    <li>Layanan lainnya disesuaikan dengan permintaan</li>
                </ul>
                
                Dengan layanan konsultasi keamanan yang kami berikan, Anda dapat memastikan bahwa setiap aspek keamanan akan dikelola dengan profesional dan ketelitian tertinggi.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiKonsultasi.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
