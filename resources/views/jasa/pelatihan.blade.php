@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
    <div class="container-jasa animated-element">
        <div class="left-container">
            <h1 class="title">Jasa Pelatihan Security</h1>
            <p class="description">
                
                Jika perusahaan anda menginginkan keamanan yang ketat dan tak tergoyahkan, kami siap memberikan pelatihan keamanan Satpam yang berkulitas tinggi dan berlisensi. Dengan program pelatihan keamanan, mereka akan menjadi garda terdepan yang siap melindungi aset dan keamanan perusahaan anda.
            <p class="description">
                Dalam pelatihan keamanan, kami akan memastikan bahwa setiap anggota satpam telah dilatih secara menyeluruh dengan keterampilan yang baik. Bekerja sama dengan kami tidak hanya menciptakan penjaga yang kuat, melainkan satpam yang terampil dan siap untuk menghadapi berbagai permasalahan kemanan di perusahaan anda.
        </div>
        <div class="right-container">
            <img src="{{asset('image/jasa/jasaPelatihan.png')}}" alt="Gambar">
        </div>
    </div>
    {{-- Pemisah dengan List Layanan --}}
    <div class="separator animated-element">Cakupan Dari Layanan Backoffice sebagai berikut : </div>
    <div class="container-wrapper animated-element">
        <a href="{{ route('jasa-keamanan.pelatihanKeamanan') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/keamanan/pelatihan.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-keamanan.pelatihanKeamanan') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content animated-element">
                        <div class="service-title">Pelatihan Satpam</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

@include('layouts.footer')
@endsection
