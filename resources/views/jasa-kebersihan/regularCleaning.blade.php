@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Regular Cleaning</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                
                Kami hadir untuk membantu perusahaan anda menjaga kebersihan dan kesegaran ruang kerja di perusahaan anda. Dengan layanan Regular Cleaning kami, Anda telah menjaga kebersihan perusahaan secara rutin. Layanan Regular Cleaning meliputi  beberapa tugas seperti menyapu lantai, mengepel, membersihkan kamar mandi dan sebagainya.
            </p>
            <p class="description">
                Dengan menggunakan jasa Regular Cleaning kami, Anda akan merasakan perbedaan yang signifikan sejak hari pertama kita bekerja sama. Tim cleaning kami merupakan tenaga kerja yang handal dan memiliki semangat untuk memberikan sentuhan ajaib bagi perusahaan Anda.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/kebersihan/isiRegular.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection