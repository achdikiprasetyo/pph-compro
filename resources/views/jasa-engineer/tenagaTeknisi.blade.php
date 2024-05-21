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
                Kami memiliki komitment untuk menjadi mitra yang terpercaya dan memastikan perlatan teknis yang ada di perusahaan anda dapat beroprasi dengan baik dan tanpa hambatan. Selain memiliki keahlian teknisi yang baik, tim kamu juga berdedikasi untuk memberikan sebuah solusi yang efektif dan cepat.
            </p>
            <p class="description">
                Dengan tim teknisi yang responsif dan memiliki pemahaman penuh dalam dunia teknisi, tim kami juga siap membantu perusahaan anda untuk berkembang. Jika anda mencari tim teknisi yang ahli, berpengalaman, dan dapat diandalkan, tim kami siap membantu perusahaan anda.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/engineer/isiTenaga.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection