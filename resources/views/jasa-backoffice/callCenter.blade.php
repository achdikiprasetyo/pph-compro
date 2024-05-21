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
                Perusahaan kami memiliki tenaga Call Center yang sudah terlatih dengan baik dalam menjawab pertanyaan dan menangani permintaan client. Selain itu mereka juga bisa memberikan pengalaman pelanggan yang sangat baik.
            </p>
            <p class="description">
                Kami menyediakan Call Center agar anda tidak perlu repot-repot untuk meningkatkan pengalaman pelanggan ketika mereka memiliki pertanyaan atau keluhan. Tim kami hadir untuk menyelesaikan permasalahan tersebut. Percayakan Call Center pada perusahaan kami untuk pengalaman berkomunikasi yang menyenangan dan memuaskan calon klien anda.
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
