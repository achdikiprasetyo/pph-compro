@extends('layouts.footer')
@extends('layouts.navbar')

<style>
    body {
        font-family: Arial, sans-serif; /* Ganti dengan jenis huruf yang diinginkan */
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    .description {
        margin-top: 20px;
        line-height: 1.6;
        
    }

    .img-fluidd {
        max-width: 70%;
        height: auto;
        display: block; /* Hindari margin tambahan pada elemen gambar */
        margin: 0 auto; /* Pusatkan gambar di dalam kontainer */
    }

    @media (min-width: 768px) {
        /* Aturan CSS untuk layar desktop */
        .img-fluid {
            max-width: 80%;
            float: left;
            margin-right: 20px;
        }

        .description {
            overflow: hidden;
        }
    }
    .container-jasa {
            display: flex;
            flex-wrap: wrap;
        }

        .left-container {
            flex: 1;
            padding: 20px;

        }

        .right-container {
            flex: 1;
            overflow: hidden; /* Mencegah gambar keluar dari container */
  
        }

        img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px; /* Add border-radius to the image */
        }

        h1.title {
            color: #00A9FF; /* Set title color to dark grey */
            font-weight: bold; /* Make the title bold */
            font-size: 28px; /* Set title font size */
            margin-bottom: 10px; /* Add space below the title */
        }

        h2.subtitle {
            color: #000000; /* Set subtitle color to blue */
            font-size: 20px; /* Set subtitle font size */
            font-weight: normal; /* Remove bold from subtitle */
            margin-top: 0; /* Remove default top margin */
        }

        @media (max-width: 768px) {
            .container-jasa {
                flex-direction: column;
            }
        }
</style>



@section('content')
<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Jasa Keamanan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Layanan keamanan dapat dipergunakan untuk perumahan, perkantoran, rumah sakit, sekolah, kampus, gedung produksi, Mall, Perbankan, dan perusahaan lainnya yang memerlukan sebuah jasa kemananan untuk menciptakan lingkungan yang terjamin keamanannya.
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

<div class="separator animated-element">Cakupan Dari Layanan Keamanan sebagai berikut : </div>
<div class="container-wrapper">
    <a href="{{ route('jasa-keamanan.konsultasiKeamanan') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element">
            <div class="list-item">
                <img src="{{ asset('image/keamanan/konsultasi.png') }}" alt="Service Image">
                <a href="{{ route('jasa-keamanan.konsultasiKeamanan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Konsultasi Keamanan</div>

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

    <a href="{{ route('jasa-keamanan.tenagaKeamanan') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element">
            <div class="list-item">
                <img src="{{ asset('image/jasa/keamanan.png') }}" alt="Service Image">
                <a href="{{ route('jasa-keamanan.tenagaKeamanan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Tenaga Keamanan</div>

                </div>
            </div>
        </div>
    </a>
</div>

@endsection
