@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Resepsionis</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Kesan pertama dalam bisnis merupkan salah satu aspek yang sangat penting. Oleh karena itu, kami hadir untuk memberikan layanan Resepsionis untuk membantu membuat kesan positif dan tak terlupakan bagi setiap tamu. Tenaga resepsionis kami memiliki citra profesionalisme dan dapat meningkatan efisiensi dalam pelayanan tamu.  
                </p>
                <p class="description">
                    Dengan menjadi mitra kami dalam layanan Resepsionis, Anda akan mendapatkan layanan penerimaan tamu yang efisien dan memastikan setiap orang yang datang diperusahaan anda akan diterima dengan dengan senyuman dan kenyamanan.
                </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/jasa/resepsionisLandscape.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection