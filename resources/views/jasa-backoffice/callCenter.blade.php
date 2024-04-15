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
                Layanan Call Center yang kami sediakan akan membantu perusahaan anda dengan ramah dan efisien. Tim Call Center kami tidak hanya terlatih dengan baik dalam menjawab pertanyaan dan menangani permintaan client, melainkan mereka juga bisa memberikan pengalaman pelanggan yang sangat baik.
            </p>
            <p class="description">
                Kami menyediakan Call Center agar tidak perlu repot-repot lagi mencar jawaban, tim kami ada untuk menyelesaikan permasalahan tersebut. Percayakan Call Center pada perusahaan kami untuk pengalaman berkomunikasi yang menyenangan dan memuaskan.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/callCenter.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
