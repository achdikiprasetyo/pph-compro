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
                Satpam dari perusahaan kami merupakan satuan pengamanan yang telah melewati proses seleksi ketat, profesional, memiliki lisensi dan telah lulus dari berbagai pelatihan sesuai dengan Standar Operasional Prosedur. Bersama kami anda akan mendapatkan Satuan Pengaman yang siap setia untuk menjaga perusahaan anda agar tetap tenang dan aman. 
            </p>
            <p class="description">
                Selain itu kami juga berkomitment untuk memberikan perlindungan keamanan yang tak tertandingi. Kami menghargai kepercayaan yang Anda berikan kepada kami, dan kami siap untuk membuktikan bahwa keamanan perusahaan Anda adalah prioritas utama bagi kami.
    </div>
</div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiTenaga.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
