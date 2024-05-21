@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Operator Parkir</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Dengan operator parkir yang akan kami sediakan, anda tidak perlu repot memikirkan tempat parkir di perusahaan anda, karena kami memiliki tenaga yang sudah ahli dan dapat meningkatkan efisiensi dalam proses parkir kendaraan di perusahaan anda.
            </p>
            <p class="description">
                Layanan tenaga Operator Parkir kami tidak hanya menawarkan lahan parkir yang terorganisir dengan baik, kami juga akan memberikan pengalaman yang memastikan keamanan dan kenyamanan orang yang ingin memarkirkan kendaraanya.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/operatorParkir.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
