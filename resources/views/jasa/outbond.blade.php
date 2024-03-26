@extends('layouts.footer')
@extends('layouts.navbar')

<style>
    body {
        font-family: Arial, sans-serif;
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
        margin-left: 15px;
    }

    .img-fluidd {
        max-width: 70%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    @media (min-width: 768px) {
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
        overflow: hidden;
    }

    img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
    }

    h1.title {
        color: #00A9FF;
        font-weight: bold;
        font-size: 28px;
        margin-bottom: 10px;
        margin-left: 13px;
    }

    h2.subtitle {
        color: #000000;
        font-size: 20px;
        font-weight: normal;
        margin-top: 0;
    }

    @media (max-width: 768px) {
        .container-jasa {
            flex-direction: column;
        }
    }
</style>

@section('content')
<div class="container-jasa" data-aos="fade-up" data-aos-delay="100">
    <div class="left-container animated-element" data-aos="fade-in" data-aos-delay="200">
        <h1 class="title">Jasa Outbond</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12 ">
                <p class="description">
                    Layanan Outbond yang ditawarkan oleh perusahaan kami merupakan sebuah kegiatan di luar ruangan untuk mengembangkan Sumber Daya Manusia dan Kerja Sama Tim di lingkungan perusahaan Anda. Kegiatan Outbond ini mulai dari tantangan Fisik dan Mental seperti permainan berkelompok yang bertujuan untuk meningkatkan kerja sama tim dan meningkatkan keterampilan Kepemimpinan.
                </p>
                <p class="description">
                    Pada kegiatan Outbond, para peserta yang mengikuti semua rangkaian acara akan mendapatkan beberapa keuntungan seperti:
                </p>
                <table>
                    <ul>
                        <li>Kerja Sama TIM</li>
                        <li>Pembentukan Karakter Setiap Individu</li>
                        <li>Pengembangan sikap Kepemimpinan</li>
                        <li>Hiburan</li>
                    </ul>
                </table>
            </div>
        </div>
    </div>
    <div class="right-container animated-element" data-aos="fade-up" data-aos-delay="300">
        <img src="{{asset('image/jasa/outbondSlide.png')}}" alt="Gambar">
    </div>
</div>
@endsection

<!-- Add AOS library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- Add AOS initialization -->
<script>
    AOS.init();
</script>
