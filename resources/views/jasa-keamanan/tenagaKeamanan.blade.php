@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Tenaga Kemanan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Satpam dari perusahaan kami merupakan tenaga profesional dan telah memiliki lisensi.
                Bersama kami, tenaga keamanan dari perusahaan kami, anda akan mendapatkan satpam yang siap setia untuk menjaga perusahaan anda agar tetap tenang dan aman. 
            </p>
            <p class="description">
                Selain itu kami juga berkomitment untuk memberikan perlindungan keamanan yang tak tertandingi. 
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiTenaga.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
