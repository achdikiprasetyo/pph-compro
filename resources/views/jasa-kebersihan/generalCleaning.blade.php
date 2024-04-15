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
                Jika perusahaan anda mencari solusi pembersihan yang handal maka, layanan kami adalah jawabanya. Layanan kami menyediakan general cleaning yang tidak hanya memberisihkan, melainkan juga menciptakan lingkungan yang sehat dan nyaman untuk bisnis anda berkembang.
            </p>
            <p class="description">
                Dengan menggunakan layanan kami anda akan mendapatkan benefit seperti : meningkatnya citra dan kesan positif perusahaan anda dan anda juga akan mendapatkan kemitraan yang berkualitas. Jangan pernah membiarkan masalah kebersihan menjadi beban tambahan bagi perusahaan anda, maka dari itu bekerja samalah dengan perusahaan kami.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/kebersihan/isiGeneral.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection