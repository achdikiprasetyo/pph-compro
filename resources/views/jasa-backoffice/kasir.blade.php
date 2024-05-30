@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Kasir</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Keamanan dalam bertransaksi merupakan prioritas kami. Dengan menggunakan Layanan Kasir yang disediakan oleh perusahaan kami, Anda akan mendapatkan tenaga yang memberikan efisiensi serta kemudahan khususnya untuk memdukung proses transaksi bisnis.
                    <br><br>
                    Kami juga mengerti waktu dan uang merupakan suatu hal yang sangat berharga. Oleh karena itu, kami menyediakan solusi hemat biaya dan efisiensi waktu dalam setiap proses transaksi. Dengan layanan Kasir kami, Anda dapat memastikan bahwa setiap transaksi dilakukan dengan aman, cepat, dan efisien, memungkinkan Anda untuk fokus pada pengembangan bisnis Anda.

                </p>

        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/kasir.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
