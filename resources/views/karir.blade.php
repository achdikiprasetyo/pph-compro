@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/karir.css') }}">
@endsection

@section('content')
<div class="container-jasa">
    <div class="left-container animated-element" >
        <h1 class="title">Karir PT. Panca Pilar Hutama</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p>
                    Kami membuka peluang karir untuk individu yang bersemangat dan berkomitmen tinggi untuk tumbuh bersama kami. PT Panca Pilar Hutama, sebagai perusahaan yang terus berkembang, membuka pendaftaran untuk sejumlah posisi yang menarik!
                </p>
            

            
                <p><strong>Posisi yang Dibuka:</strong></p>
                <ul>
                    <li>Satpam</li>
                    <li>Cleaning Service</li>
                    <li>Admin</li>
                    <li>Engineer (dan banyak lagi!)</li>
                </ul>
            
                <p><strong>Pendaftaran Masih Terbuka :</strong></p>
                <p>
                    Selagi posisi di bawah masih tampil diwebsite, Anda masih memiliki kesempatan untuk mendaftar/melamar. Segera Kirimkan berkas pendaftaran anda dengan klik foto dibawah, sesuai dengan keahlian anda.
                </p>

            </div>
        </div>
    </div>
    {{-- Foto kanan tulisan --}}
    <div class="right-container animated-element">
        <img src="{{asset('image/karir.png')}}" alt="Gambar">
    </div>
</div>

    {{-- pemisah dengan list karir --}}
    <div class="separator animated-element">Berikut posisi yang masih terbuka untuk pelamar: </div>

    <div class="container-wrapper animated-element ">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/keamanan.png') }}" alt="Service Image">
                    <a href="{{ route('lamar') }}" class="read-more-button">Lamar</a>
                    <div class="text-content">
                        <div class="service-title">Satpam</div>

                    </div>
                </div>
            </div>
        </a>
    
            <div class="container-box animated-element" >
                <div class="list-item">
                    <img src="{{ asset('image/jasa/backoffice.png') }}" alt="Service Image">
                    <a href="{{ route('lamar') }}" class="read-more-button">Lamar</a>
                    <div class="text-content">
                        <div class="service-title">Admin</div>
                    </div>
                </div>
            </div>
        </a>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/kebersihan.png') }}" alt="Service Image">
                    <a href="{{ route('lamar') }}" class="read-more-button">Lamar</a>
                    <div class="text-content">
                        <div class="service-title">Cleaning Service</div>
                    </div>
                </div>
            </div>
        </a>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/produksi.png') }}" alt="Service Image">
                    <a href="{{ route('lamar') }}" class="read-more-button">Lamar</a>
                    <div class="text-content">
                        <div class="service-title">Tenaga Produksi</div>
                    </div>
                </div>
            </div>
        </a>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/teknisi.png') }}" alt="Service Image">
                    <a href="{{ route('lamar') }}" class="read-more-button">Lamar</a>
                    <div class="text-content">
                        <div class="service-title">Teknisi</div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    @include('layouts.footer')   
@endsection
