@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
    <div class="container-jasa animated-element">
        <div class="left-container">
            <h1 class="title">Jasa Tenaga Produksi</h1>
            <p class="description">
                Peran dari Tenaga Kerja Produksi adalah membantu proses pembuatan barang ataupun jasa.
                Dalam mencapai target produksi, maka diperlukan adanya tenaga kerja produksi yang terampil dan terlatih untuk mengoperasikan mesin produksi, supaya menghasilkan produk yang baik dan berkualitas. 
                
                <br>
                <br>Tenaga kerja yang handal merupakan kunci untuk memastikan bahwa proses produksi berjalan lancar dan efisien. Untuk itu, kami menyediakan berbagai jenis jasa yang dirancang untuk memenuhi kebutuhan produksi Anda, antara lain:

            <p class="description">
                <li>Jasa Tenaga Produksi</li>
                <li>Jasa Tenaga Pengawas Produksi</li>
                <li>Pengawasan Mesin dan Alat Produksi</li>
        </div>
        <div class="right-container">
            <img src="{{asset('image/jasa/produksiLandscape.png')}}" alt="Gambar">
        </div>
    </div>

@include('layouts.footer')
@endsection
