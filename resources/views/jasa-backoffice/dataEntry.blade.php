@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Data Entry</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Layanan Data Entry kami dirancang untuk membuat meningkatkan efisiensi pengolahan data dalam perusahaan anda. Tidak perlu lagi memikirkan bagaimana cara memasukkan data yang sangat banyak dan membosankan, layanan kami hadir untuk menangani permaslahan tersebut.
            </p>
            <p class="description">
                Dengan keahlian dari tim Data Entry, kami menjamin efisiensi waktu dalam measukkan data dan mengelolah data. Layanan kami hadir untuk meningkatkan efisiensi dan produktivitas perusahaan anda.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/dataEntry.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
