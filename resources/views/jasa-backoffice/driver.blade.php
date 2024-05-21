@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Driver</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Kami merupakan solusi, jika anda memiliki permasalahan dalam pengantaran  dan perjalanan yang memerukan kenyalaman dan kehandalan. Dengan Driver yang berpengalaman dan memiliki lisensi yang lengkap, kami akan menyediakan Driver yang andal dan mahir dalam mengemudi.
            </p>
            <p class="description">
                Dengan memilih layanan Driver kami, anda tidak hanya mendapatkan Driver yang handal, tetapi anda juga akan mendapatkan keamanan, kenyamanan, dan efisiensi waktu. 
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/jasa/jasaDriver.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection