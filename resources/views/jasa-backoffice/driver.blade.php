@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Driver</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Kami merupakan solusi, jika anda mengalami permasalahan dalam pengantaran dan perjalanan yang memerlukan kenyamanan dan kehandalan. Driver kami telah memiliki lisensi lengkap dan mahir dalam mengemudi. Kami juga memiliki Driver khusus yang terlatih dalam mengoprasikan kendaraan berat seperti truk dan mobil pengangkut barang.
            </p>
            <p class="description">
                Dengan memilih layanan Driver kami, anda tidak hanya mendapatkan Driver yang handal, tetapi anda juga akan mendapatkan keamanan, kenyamanan, dan efisiensi waktu. Berikut adalah kendaraan yang dapat dikendaraai oleh driver kami :
                <ul>
                <li>Mobil Penumpang</li>
                <li>Kendaraan Berat (Truk atau Mobil Pengangkut Barang)</li>
                <li>Kendaraan Khusus (Menyesuaikan Permintaan)</li>
                </ul>
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/jasa/jasaDriver.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection