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
                Facade Cleaning merupakan sebuah layanan kami yang meliputi pembersihan luar gedung atau bangunan, untuk memastikan bagian tersebut telah bersih dari kotoran, noda, dan sebagainya. Pada layanan ini material yang paliing sering ditemukan adalah kaca, batu dan kayu.


            </p>
            <p class="description">
            Dengan tim kebersihan profesinal kami, perusahaan anda tidak perlu lagi khawatir terhadap kotoran dan noda yang menggangu dibagian luar bangunan atau gedung perusahaan anda. Kami akan menerapkan keahlian kami dan akan menjadikan bagunan anda menjadi bersinar dan akan terlihat seperti baru lagi.
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
