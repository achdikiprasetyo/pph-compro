@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Jasa Keamanan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Dengan tenaga kemanan kami, anda tidak perlu lagi khawatir dengan lingkungan anda, Karena kami telah berhasil menjaga keamanan di beberapa lingkungan, termasuk perumahan, perkantoran, rumah sakit, sekolah, kampus, gedung produksi, Mall, Perbankan, dan perusahaan lainnya yang memerlukan sebuah jasa kemananan untuk menciptakan lingkungan yang terjamin keamanannya.
                </p>
                <p class="description">
                    PT. Panca Pilar Hutama menyediakan sebuah layanan yang terbaik dalam bidang kemanan yang meliputi :
                <table>
                    <ul>
                        <li>Pelayanan jasa keamanan yang terlatih</li>
                        <li>Penyedia Jasa Pelatihan Keamanan</li>
                        <li>Konsultasi Keamanan</li>
                        <li>Penyedia Peralatan dan Perlengkapan Keamamanan</li>
                    </ul>
                </table>
                
            </div>
        </div>
    </div>
    <div class="right-container animated-element">
        <img src="{{asset('image/tes.png')}}" alt="Gambar">
    </div>
</div>

{{-- Pemisah dengan List Layanan --}}
<div class="separator animated-element">Cakupan Dari Layanan Keamanan sebagai berikut : </div>
<div class="container-wrapper">
    <a href="{{ route('jasa-keamanan.konsultasiKeamanan') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element">
            <div class="list-item">
                <img src="{{ asset('image/keamanan/konsultasi.png') }}" alt="Service Image">
                <a href="{{ route('jasa-keamanan.konsultasiKeamanan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Penyedia Konsultasi Keamanan</div>
                </div>
            </div>
        </div>
    </a>

    <a href="{{ route('jasa-keamanan.pelatihanKeamanan') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element">
            <div class="list-item">
                <img src="{{ asset('image/keamanan/pelatihan.png') }}" alt="Service Image">
                <a href="{{ route('jasa-keamanan.pelatihanKeamanan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Pelatihan Keamanan</div>
                </div>
            </div>
        </div>
    </a>

    <a href="{{ route('jasa-keamanan.tenagaKeamanan') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element">
            <div class="list-item">
                <img src="{{ asset('image/jasa/keamanan.png') }}" alt="Service Image">
                <a href="{{ route('jasa-keamanan.tenagaKeamanan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Penyedia Tenaga Keamanan</div>
                </div>
            </div>
        </div>
    </a>

    <a href="{{ route('jasa-keamanan.penyediaPerlengkapanKeamanan') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element">
            <div class="list-item">
                <img src="{{ asset('image/keamanan/penyedia.png') }}" alt="Service Image">
                <a href="{{ route('jasa-keamanan.penyediaPerlengkapanKeamanan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Penyedia Perlengkapan Keamanan</div>
                </div>
            </div>
        </div>
    </a>
</div>

@include('layouts.footer')
@endsection
