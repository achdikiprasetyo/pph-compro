@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">General Cleaning</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                General Cleaning merupakan sebuah kegiatan pembersihan secara menyeluruh disuatu area atau bangunan yang perlu dilakukan secara berkala agar, area atau bangunan tersebut terhindar dari kerusakan, terlihat lebih nyaman dan bersih. General Cleaning merupakan sebuah layanan yang pasti dibutuhkan oleh individu ataupun perusahaan untuk menjaga kebersihan lingungannya.
            </p>
            <p class="description">
                Apabila perusahaan anda mencari solusi pembersihan yang handal, maka layanan kami adalah jawabanya. Layanan kami menyediakan general cleaning yang tidak hanya memberisihkan, melainkan juga menciptakan lingkungan yang sehat dan nyaman untuk lingkunga anda.
            </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/kebersihan/isiGeneral.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection