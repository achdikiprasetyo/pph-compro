@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
    <div class="container-jasa animated-element">
        <div class="left-container">
            <h1 class="title">Jasa Sumber Daya Manusia</h1>
            <p class="description">
                Di dalam pelatihan Sumber Daya Manusia, kami bertujuan untuk meningkatkan keterampilan, pengetahuan, dan kemampuan setiap individu dalam berbagai aspek yang berkaitan dengan pekerjaan mereka. Perusahaan kami tidak hanya menawarkan jasa pelatihan yang standar, melainkan  juga melayani pelatihan yang disesuaikan dengan kebutuhan spesifik lainnya.
            <p class="description">
                Layanan kami dirancang untuk memberikan jasa pelatihan yang telah disesuaikan untuk kebutuhan perusahaan anda. Dengan pendekatan yang praktis dan mudah dimengerti, kami akan membantu perusahaan anda untuk meningkatkan keterampilan, motivasi dan produktivitas disetiap individu.
        </div>
        <div class="right-container">
            <img src="{{asset('image/jasa/jasaSdm.png')}}" alt="Gambar">
        </div>
    </div>

@include('layouts.footer')
@endsection
