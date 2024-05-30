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
                Layanan Tenaga Data Entry merupakan sebuah tim atau individu yang memiliki tanggung jawab untuk memasukkan, memperbarui, dan mengelola ke sistem komputer atau basis data. Dengan begitu anda tidak perlu lagi memikirkan bagaimana cara memasukkan data yang sangat banyak dan kompleks, layanan kami hadir untuk menangani permasalahan tersebut.
            </p>
            <p class="description">
                Dengan keahlian dari tim Data Entry, kami menjamin efisiensi waktu dalam memasukkan dan mengelolah data. Kami berkomitmen untuk menyediakan layanan Data Entry yang akurat, efisien, dan aman, untuk membantu perusahaan Anda mencapai kesuksesan dengan solusi data entry yang andal dan profesional.
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
