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
        <h1 class="title animated-element" data-animation="fadeIn" >Jasa Engineer</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">

                <p class="description animated-element" data-animation="fadeIn">
                    Properti yang terawat dengan baik akan menciptakan rasa yang nyaman dan aman dikarenakan semua sistem instalasi gedung yang terpelihara dengannsistem Corrective Action, Preventice Action dan Defect repair didukung oleh tenaga ahli yang memiliki pendidikan dan pengalaman yang berdasar pada sertifikasi dan instalasi terkait.
                </p>
                <p class="description animated-element" data-animation="fadeIn">
                    PT. Panca Pilar Hutama menyediakan sebuah pelayanan yang terbaik dalam bidang perawatan dan pemeliharaan Gedung. Layanan kami memberikan beberapa penawaran untuk Jasa Teknisi / Engineer yakni :
                </p>
                <table>
                    <ul>
                        <li class="animated-element" data-animation="fadeIn">Penyedia Jasa Tenaga Teknisi</li>
                        <li class="animated-element" data-animation="fadeIn">Penyedia Jasa Tenaga Ahli</li>
                        <li class="animated-element" data-animation="fadeIn">Penyedia Peralatan Teknik</li>
                        <li class="animated-element" data-animation="fadeIn">Pelatihan Tenaga Teknisi</li>
                    </ul>
                </table>
            </div>
        </div>
    </div>
    <div class="right-container animated-element" data-animation="fadeIn">
        <img src="{{asset('image/jasa/jasaTeknisi.png')}}" alt="Gambar">
    </div>
</div>

<div class="separator animated-element">Cakupan Dari Layanan Engineer sebagai berikut : </div>

<div class="container-wrapper animated-element">
    <a href="{{ route('jasa-engineer.tenagaTeknisi') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item">
                <img src="{{ asset('image/engineer/tenaga.png') }}" alt="Service Image">
                <div class="text-content">
                    <a href="{{ route('jasa-engineer.tenagaTeknisi') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="service-title">Tenaga Teknisi</div>

                </div>
            </div>
        </div>
    </a>

    <a class="animated-element" class="animated-element" data-animation="fadeIn" href="{{ route('jasa-engineer.tenagaAhli') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item ">
                <img src="{{ asset('image/engineer/penyedia.png') }}" alt="Service Image">
                <a href="{{ route('jasa-engineer.tenagaAhli') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Tenaga Ahli</div>

                </div>
            </div>
        </div>
    </a>



</div>


@endsection
