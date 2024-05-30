@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Call Center</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">      
                Perusahaan kami memiliki tenaga Call Center yang sudah terlatih untuk menamgani panggilan masuk dan panggilan keluar dari pelanggan. Call Center merupakan titik kontak utama untuk keluhan, pertanyaan dan dukungan pelanggan. Selain itu mereka juga bisa memberikan pengalaman pelanggan yang sangat baik.
            </p>
            <p class="description">
                Kami menyediakan Call Center agar Anda tidak perlu repot-repot lagi dalam meningkatkan pengalaman pelanggan ketika mereka memiliki pertanyaan atau keluhan. Tim kami siap menangani segala permasalahan dan memastikan setiap pelanggan merasa didengarkan dan puas dengan layanan yang diberikan. Percayakan Call Center kepada perusahaan kami untuk pengalaman berkomunikasi yang menyenangkan dan memuaskan calon klien Anda. 
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/callCenter.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
