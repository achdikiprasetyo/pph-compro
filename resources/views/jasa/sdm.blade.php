@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
    <div class="container-jasa animated-element">
        <div class="left-container">
            <h1 class="title">Jasa Sumber Daya Manusia</h1>
            <p class="description">
                Di dalam pelatihan Sumber Daya Manusia, kami mengundang anda untuk menjadi mitra dalam mengoptimalkan Sumber Daya Manusia yang ada di perusahaan anda. Perusahaan kami tidak hanya menawarkan jasa pelatihan yang standar, melainkan  juga melayani pelatihan yang disesuaikan dengan kebutuhan spesifik lainnya.
            <p class="description">
                Layanan kami dirancang untuk memberikan jasa pelatihan yang telah disesuaikan untuk kebutuhan perusahaan anda. Dengan pendekatan yang praktis dan mudah dimengerti, kami akan membantu perusahaan anda untuk meningkatkan keterampilan, motivasi dan produktivitas tim.
        </div>
        <div class="right-container">
            <img src="{{asset('image/jasa/jasaSdm.png')}}" alt="Gambar">
        </div>
    </div>

@include('layouts.footer')
@endsection
