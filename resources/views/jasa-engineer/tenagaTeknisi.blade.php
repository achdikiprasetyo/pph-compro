@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Tenaga Teknisi</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Kami memiliki komitment untuk menjadi mitra yang terpercaya dan memastikan perlatan teknis yang ada di perusahaan anda dapat beroprasi dengan baik dan tanpa hambatan. Tim kami tidak hanya memiliki keahlian teknis yang luar biasa, tetapi juga berdedikasi untuk menyediakan solusi yang efektif dan responsif.
            </p>
            <p class="description">
                Dengan tim teknisi yang responsif dan memiliki pemahaman penuh dalam dunia teknisi, tim kami juga siap membantu perusahaan anda untuk berkembang.  Jika Anda mencari tim teknisi yang ahli, berpengalaman, dan dapat diandalkan, tim kami siap mendukung kebutuhan teknis perusahaan Anda.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/engineer/isiTenaga.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection