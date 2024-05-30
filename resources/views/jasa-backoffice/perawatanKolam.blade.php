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
                    Kolam diperusahaan anda mungkin menjadi tempat untuk bersantai, melepaskan lelah untuk karyawan, tamu, dan sebagainya. Disini kami hadir untuk memberikan pelayanan perawatan kolam yang didukung oleh tenaga kebersihan kami. Dengan tenaga kebersihan kami, dapat dipastikan kolam di tempat anda akan terjaga, terawat, dan dapat dipastikan kualitas kolam akan tetap optimal. 
                </p>
                <p class="description">
                    Dengan tim yang ahli dalam bidang perawatan kolam, kami menawarkan solusi untuk menjaga kejernihan air, kesehatan, dan keindahan kolam perusahaan Anda. Selain perawatan kolam, kami juga menciptakan lingkungan yang memancarkan nilai positif dan menjadi nilai tambah bagi lingkungan perusahaan Anda.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/perawatanKolam.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
