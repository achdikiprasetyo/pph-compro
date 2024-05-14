@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Penyedia Peralatan Kebersihan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Perusahaan kami menyediakan peralatan kebersihan yang mampu menjadi kunci untuk menciptakan sebuah lingkungan yang bersih, nyaman , dan produkif. Dengan peralatan yang sesuai dan berkualitas, kami menawarkan sousi kebersihan yang mudah digunakan dan efektif.
            </p>
            <p class="description">
                Dengan memilih kami sebagai mitra, perusahaan anda tidak hanya mendapatkan alat kebersihan berkualitas tinggi, melainkan mitra yang pedulia dan siap membantu perkembangan perusahaan anda. Marilah kita bersama membangun ruang kerja yang nyaman dan sehat.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/kebersihan/isiPenyedia.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection