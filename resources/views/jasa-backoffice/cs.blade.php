@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Customer Service</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Memiliki koneksi yang baik dengan pelanggan merupakan suatu hal yang sangat penting dalam berbisis. Maka dari itu kami hadir untuk membantu perusahaan anda untuk membangun hubungan yang kuat melalui layanan customer service yang profesional dan bersahabat.
            </p>
            <p class="description">
                Ketika anda memilih kami sebagai mitra, anda akan mendapatkan dukungan serta kepedualian kami dengan kebutuhan bisnis anda. Tim Customer Service kami sudah dilatih untuk memahami berbagai pelanggan dengan baik dan memberikan tanggapan yang baik dengan cepat.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/customerService.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
