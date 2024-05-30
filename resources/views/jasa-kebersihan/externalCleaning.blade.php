@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">External / Facade Cleaning</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Facade Cleaning merupakan salah satu layanan kebersihan kami yang meliputi pembersihan luar gedung atau bangunan, untuk memastikan bagian tersebut telah bersih dari kotoran, noda, dan sebagainya. Pada layanan ini material yang paling sering ditemukan adalah kaca, batu dan kayu.


            </p>
            <p class="description">
            Dengan tim kebersihan profesional kami, perusahaan Anda tidak perlu lagi khawatir terhadap kotoran dan noda yang menggangu dibagian luar bangunan atau gedung perusahaan. Kami akan mengaplikasikan keahlian kami dan akan menjadikan bangunan anda menjadi bersinar dan terlihat seperti baru lagi.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/kebersihan/isiFacade.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
