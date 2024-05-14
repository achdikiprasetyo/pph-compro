@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
    <div class="container-jasa animated-element">
        <div class="left-container">
            <h1 class="title">Jasa Tenaga Produksi</h1>
            <p class="description">
                Dalam mencapai target produksi yang telah ditentukan maka diperlukan adanya tenaga kerja produksi yang terampil dan terlatih untuk mengoperasikan mesin produksi supaya menghasilkan produk yang baik dan berkualitas.

PT. Panca Pilar Hutama telah memiliki tenaga produksi berpengalaman. Adapun jasa yang dapat kami sediakan sebagai berikut :

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
