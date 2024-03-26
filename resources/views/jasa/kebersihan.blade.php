@extends('layouts.footer')
@extends('layouts.navbar')

<style>



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
            margin-bottom: 10px;
            margin /* Add space below the title */
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
        <h1 class="title animated-element" data-animation="fadeIn">Jasa Kebersihan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                
                Jasa Kebersihan kami memberikan solusi profesional untuk membersihkan dan merawat kebersihan
                lingkungan Anda. Dengan tim terlatih dan peralatan modern, kami siap membantu menjaga kebersihan
                tempat Anda.
            </p>
            <p class="description">
                Layanan jasa kebersihan kami mencakup mulai dari Hotel, Mall, Gedung Perkantoran, Perumahan, atau gedung yang masih dalam tahap pembangunan ataupun sudah dalam kondisi opsional yang perlu perhatian khusus, terutama dalam bidang kebersihan agar tercipta sebuah kondisi properti yang bersih dan terawat.
            </p>
            <p class="description">
                PT. Panca Pilar Hutama memiliki tenaga dan peralatan kebersihan yang mampu memberikan sebuah pelayanan dibidang kebersihan yang meliputi :
            </p>
            <table>
                <ul>
                    <li>Regular Cleaning</li>
                    <li>General Cleaning</li>
                    <li>External / Facade Cleaning</li>
                    <li>Pengadaan Peralatan dan Chemicals</li>
                </ul>
            </table>
           
        </div>
    </div>
</div>
    <div class="right-container animated-element" data-animation="fadeIn">
        <img src="{{asset('image/jasa/jasaKebersihan.png')}}" alt="Gambar">
    </div>
</div>

<div class="separator animated-element" data-animation="fadeIn">Cakupan Dari Layanan Kebersihan sebagai berikut : </div>

<div class="container-wrapper animated-element">
    <a href="{{ route('jasa-kebersihan.regularCleaning') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item">
                <img src="{{ asset('image/kebersihan/regular.png') }}" alt="Service Image">
                <a href="{{ route('jasa-kebersihan.regularCleaning') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Regular Cleaning</div>

                </div>
            </div>
        </div>
    </a>


    <a href="{{ route('jasa-kebersihan.generalCleaning') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item">
                <img src="{{ asset('image/kebersihan/general.png') }}" alt="Service Image">
                <a href="{{ route('jasa-kebersihan.generalCleaning') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">General Cleaning</div>

                </div>
            </div>
        </div>
    </a>

    <a href="{{ route('jasa-kebersihan.externalCleaning') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item">
                <img src="{{ asset('image/kebersihan/facade.png') }}" alt="Service Image">
                <a href="{{ route('jasa-kebersihan.externalCleaning') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">External / Fade Cleaning</div>

                </div>
            </div>
        </div>
    </a>



    <a href="{{ route('jasa-kebersihan.penyediaPeralatanKebersihan') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item">
                <img src="{{ asset('image/kebersihan/penyedia.png') }}" alt="Service Image">
                <a href="{{ route('jasa-kebersihan.penyediaPeralatanKebersihan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Penyedia Peralatan Kebersihan</div>

                </div>
            </div>
        </div>
    </a>
</div>

@endsection
