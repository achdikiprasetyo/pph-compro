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
                Keamanan merupakan sebuah prioritas utama dalam perusahaan kami. Maka dari itu kami menawarkan sebuah layanan konsultasi keamanan satpam yang dapat diandalkan dan dibimbing oleh ahli yang berlisensi. Tim kami akan melakukan melakukan penulaian khusus untuk memahami kebutuhan perusahaan anda dan akan merancang apa solusi keamanan yang tepat dan sesuai.
            </p>
            <p class="description">
                Perusahaan kami tidak hanya menawarkan rencana kemananan, melainkan memberikan pelatihan intensif kepada satpam untuk memastikan kesiapan satpam untuk menghadapai berbagai situasi kemanan. Kami bertekan untuk meningkatkan keamanan perusahaan anda dan menawarkan pelayanan yang ramah dan responsif.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiKonsultasi.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
