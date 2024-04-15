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
                    Kesan pertama dalam melakukan bisnis merupkan salah satu hal yang sangat penting. Maka karena itulah kami hadir untuk memberikan layanan Resepsionis untuk membantu membuat kesan positif dan sulit dilupakan bagi setiap orang. Tenaga resepsionis kami memiliki citra profesionalisme dan dapat meningkatan pelayanan tamu yang efisien.  
                </p>
                <p class="description">
                    Dengan menjadi mitra kami dalam layanan Resepsionis, berarti anda akan mendapatkan layanan penerimaan tamu yang efisien dan memastikan setiap orang yang datang diperusahaan anda akan diterima dengan dengan senyuman dan kenyamnan.
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