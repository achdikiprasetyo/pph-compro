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
                Layanan Driver yang disediakan oleh perusahaan kami merupakan solusi untuk anda jika memiliki permasalahan dalam pengantaran yang memerukan kenyalaman dan kehandalan. Dengan Driver yang berpengalaman dan memiliki lisensi yang lengkap, kami menyediakan layanan pengantaran yang andal dan tepat waktu.
            </p>
            <p class="description">
                Dengan memilih layanan Driver kami, anda tidak hanya mendapatkan pengemudi yang handal, tetapi anda juga akan mendapatkan keamanan dan efisiensi waktu. Disini kami hadir untuk emberikan solusi transportasi yang efisien dan terpercaya.
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