@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Marketing</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Tenaga Marketing merupakan sebuah tim atau individu yang bertanggung jawab untuk mempromosikan dan menjual produk atau layanan perusahaan. Dengan kemampuan menganalisis pasar dan memahami kebutuhan konsumen, Tenaga Marketing memiliki peran penting dalam kesuksesan bisnis.
                Kami siap membantu perusahaan anda untuk bersaing dalam persaingan bisnis. Tenaga marketing kami, tidak hanya mengiklankan produk ataupun layanan anda, tetapi juga akan  menumbuhkan koneksi anda.      
            </p>
            <p class="description">
                Biarkan kami membantu Anda mencapai tujuan pemasaran Anda dan membangun hubungan yang erat dengan calon pelanggan dan pelanggan yang sudah ada. Dengan keahlian dan dedikasi tenaga marketing kami, Anda akan yakin bahwa strategi pemasaran Anda berada di tangan yang tepat.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/marketing.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection