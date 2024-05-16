
@extends('layouts.navbar')

@section('page-css')
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endsection

@section('content')
<title>PT. Panca Pilar Hutama</title>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    function animateOnScroll() {
        const motifPhoto = document.querySelector('.motif-photo');
        const reasonsContent = document.querySelector('.reasons-content');
        if (isElementInViewport(motifPhoto)) {
            motifPhoto.classList.add('animate-fade-in-left');
        }
        if (isElementInViewport(reasonsContent)) {
            reasonsContent.classList.add('animate-fade-in-right');
        }
    }
    window.addEventListener('scroll', function () {
        animateOnScroll();
    });
    document.addEventListener('DOMContentLoaded', function () {
        animateOnScroll();
    });
</script>

<script>
    function animateProgressBar(id, percentage) {
        const progressBar = document.getElementById(id);
        progressBar.style.width = `${percentage}%`;
    }

    document.addEventListener('DOMContentLoaded', function () {
        const satisfactionPercentage = 98;
        const totalClients = 57;
        const totalExperts = 750;

        animateProgressBar('satisfaction-bar', satisfactionPercentage);
        animateProgressBar('clients-bar', (totalClients / 57) * 100);
        animateProgressBar('experts-bar', (totalExperts / 790) * 100);

        document.getElementById('satisfaction-label').innerText = `Kepuasan: ${satisfactionPercentage}%`;
        document.getElementById('clients-label').innerText = `Total Client: ${totalClients}`;
        document.getElementById('experts-label').innerText = `Total Tenaga Ahli: ${totalExperts}`;
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var mySwiper = new Swiper('.swiper-container', {
            slidesPerView: 5, // Menampilkan 5 foto per slide
            spaceBetween: 10, // Jarak antar foto
            loop: true, // Membuat slider berputar
            autoplay: {
                delay: 2000, // Waktu tampilan per slide (1 detik)
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
</script>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

{{-- SLIDER HOMEPAGE --}}
<div id="slider" class="carousel slide" data-ride="carousel" data-interval="3500"> 
    <div class="carousel-inner animated-element">
        <div class="carousel-item active">
            <div class="bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p class="slogan animated-element" data-animation="fadeIn">SATPAM DENGAN KUALITAS TERBAIK</p>
                            <p class="isi-slogan animated-element" data-animation="fadeIn"> Tidak hanya menjaga fisik dan keamanan lingkungan, tetapi juga hati, karena senyuman kita adalah benteng pertama keamanan dan kenyamanan</p>
                            <a href="{{ asset('image/logo.png') }}" class="btn btn-custom animated-element" data-animation="fadeIn">Service</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="carousel-item">
            <div class="bottom-section-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p class="slogan animated-element" data-animation="fadeIn">MARI TINGKATKAN PRODUKTIVITAS</p>
                            <p class="isi-slogan animated-element" data-animation="fadeIn"> Kami menempatkan kepedulian ini tidak hanya di depan layar, tetapi juga di belakang layar, di "backoffice" perusahaan.</p>
                            <a href="{{ asset('image/logo.png') }}" class="btn btn-custom animated-element" data-animation="fadeIn">Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="bottom-section-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left">
                            <p class="slogan animated-element" data-animation="fadeIn">BERSAMA KAMI, CIPTAKAN SATPAM TANGGUH</p>
                            <p class="isi-slogan animated-element" data-animation="fadeIn"> Pelatihan Satpam kami, pondasi utama bagi produktivitas yang aman dan efisien. </p>
                            <a href="{{ asset('image/logo.png') }}" class="btn btn-custom animated-element" data-animation="fadeIn">Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="bottom-section-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left pl-4">
                            <p class="slogan animated-element" data-animation="fadeIn">MARI CIPTAKAN SUASANYA YANG INDAH DAN NYAMAN</p>
                            <p class="isi-slogan animated-element" data-animation="fadeIn"> Dilingkungan yang indah dan bersih dapat menyejukkan hati dan fikiran kita.</p>
                            <a href="{{ asset('image/logo.png') }}" class="btn btn-custom animated-element" data-animation="fadeIn">Service</a>
                        </div>
                    </div>
                </div>
                
                </div>
            </div>
        </div>
    </div>
    </a>


    <script>
        $(document).ready(function(){
            // Activate the carousel with a 5-second interval
            $('#slider').carousel({
                interval: 3000 
            });
        });
    </script>




<br><br><br>
{{-- BAR PRESENTASI KEPUASAN LAYANAN KAMI --}}
<div class="progress-container animated-element" data-animation="fadeIn">
    <div class="company-title">PT. PANCA PILAR HUTAMA</div>
    <div class="subtitle">Penyedia dan Pengelola Jasa Tenaga Kerja Profesional</div>

    <div class="label" id="satisfaction-label"></div>
    <div class="progress-bar" id="satisfaction-bar"><span></span></div>

    <div class="label" id="clients-label"></div>
    <div class="progress-bar" id="clients-bar"><span></span></div>

    <div class="label" id="experts-label"></div>
    <div class="progress-bar" id="experts-bar"><span></span></div>
  </div>
  
  <br><br><hr>
  <div class="container">
    <style>
        .custom-alasan {
            display: flex;
            align-items: center;
        }
    
        .reasons-content {
        }
    </style>
    
    <div class="row">
        <div class="col-md-6">
            <div class="motif-photo">
                <img class="animated-element" data-animation="fadeIn" src="image/alasan.png" alt="Motif Photo" class="img-fluid">
            </div>
        </div>
    
        <div class="col-md-6 custom-alasan">
            <div class="reasons-content animated-element" data-animation="fadeIn">
                <h2>Alasan Memilih Kami Sebagai Mitra Kerja Sama:</h2>
                <hr>
                <ul>
                    <li>Memiliki Legalitas Lengkap</li>
                    <li>Memiliki Lembaga Pelatihan Satuan Pengamanan</li>
                    <li>Memiliki Sumber Daya Manusia Yang Berpengalaman</li>
                    <li>Mampu Memberikan Rasa Aman, Nyaman Dan Kepuasan</li>
                    <li>Lebih Efisien Dan Efektif</li>
                    <li>Memberikan Solusi Alihbina Karyawan</li>
                    <li>Komitmen Yang Tinggi Dalam Penyediaan Tenaga Kerja</li>
                    <li>Telah Di Audit Oleh Instansi Terkait Dengan Hasil Yang Baik</li>
                </ul>
            </div>
        </div>
    </div>
    
    <br><hr><br>
   
</div>

{{-- LIST LAYANAN --}}
<main role="main">
    <br>
    <h2 class="animated-element" data-animation="fadeIn">Layanan Kami</h2>
    <br>

    <hr class="hr hr-blurry" />

    <div class="container-wrapper">
        <a href="{{ route('jasa.keamanan') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/keamanan.png') }}" alt="Service Image">
                    <div class="text-content">
                        <div class="service-title">Jasa Kemanan</div>

                    </div>
                </div>
            </div>
        </a>
    
        <a href="{{ route('jasa.kebersihan') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/kebersihan.png') }}" alt="Service Image">
                    <div class="text-content">
                        <div class="service-title">Jasa Kebersihan</div>

                    </div>
                </div>
            </div>
        </a>
    
        <a href="{{ route('jasa.pelatihan') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/pelatihan.png') }}" alt="Service Image">
                    <div class="text-content">
                        <div class="service-title">Jasa Pelatihan</div>
                       
                    </div>
                </div>
            </div>
        </a>
    
        <a href="{{ route('jasa.sdm') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/sdm.png') }}" alt="Service Image">
                    <div class="text-content">
                        <div class="service-title">Jasa Pengembangan SDM</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa.backoffice') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/1.png') }}" alt="Service Image">
                    <div class="text-content">
                        <div class="service-title">Jasa Backoffice</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa.engineer') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/teknisi.png') }}" alt="Service Image">
                    <div class="text-content">
                        <div class="service-title">Jasa Engineer</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa.produksi') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/produksi.png') }}" alt="Service Image">
                    <div class="text-content">
                        <div class="service-title">Jasa Tenaga Produksi</div>

                    </div>
                </div>
            </div>
        </a>

    </div>

        <hr>
        <div class="container">
            <h2 class="animated-element" data-animation="fadeIn">Fasilitas</h2>
            <hr class="hr hr-blurry" />
        
            <div class="row">
                <div class="col-md-6 animated-element" data-animation="fadeIn">
                    <h3>Absensi Online</h3>
                    <img src="{{asset('image/fasilitas/fasilitasAbsensi.png')}}" alt="QR Guard" class="img-thumbnail img-fluid mx-auto d-block" style="max-height: 500px;">
                </div>
                <div class="col-md-6 animated-element" data-animation="fadeIn">
                    <h3>QR Patrol</h3>
                    <img src="{{ asset('image/fasilitas/fasilitasQr.png') }}" alt="QR Guard" class="img-thumbnail img-fluid mx-auto d-block" style="max-height: 500px;">  
                </div>
                <div class="col-md-6 animated-element" data-animation="fadeIn">
                    <h3>QR Checklist</h3>
                    <img src="{{ asset('image/fasilitas/fasilitasChecklist.png') }}" alt="QR Guard" class="img-thumbnail img-fluid mx-auto d-block" style="max-height: 500px;">  
                </div>
            </div>
        </div>
        <br><hr><br>
<br>


{{-- SLIDER CLIENT --}}
<br>
<h2 class="animated-element" data-animation="fadeIn">Client yang telah Bekerja Sama dengan Kami :</h2>
                <hr>
<div class="swiper-container animated-element">
    <div class="swiper-wrapper">

        <div class="swiper-slide"><img loading="lazy" src="image/mitra/1.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/2.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/3.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/4.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/5.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/6.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/7.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/8.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/9.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/10.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/11.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/12.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/13.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/14.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/15.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/16.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/17.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/18.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/19.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/20.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/21.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/22.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/23.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/24.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/25.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/26.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/27.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/28.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/29.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/30.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/31.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/32.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/33.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/34.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/35.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/36.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/37.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/38.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/39.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/40.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/41.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/42.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/43.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/44.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/45.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/46.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/47.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/48.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/49.png" alt="Photo 1"></div>
            <div class="swiper-slide"><img loading="lazy" src="image/mitra/50.png" alt="Photo 1"></div>


    </div>
    <hr>
    <div class="container text-center mt-4 animated-element">
        <a href="{{ route('client.list') }}" class="btn btn-primary">List Semua Client Kami</a>
    </div>
</div>

    </div>
    <br><br>

    {{-- Video Company Profile --}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center animated-element" data-animation="fadeIn">
                <h2>Company Profile Video</h2>
                <hr>
                <div class="video-container animated-element" data-animation="fadeIn">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/SymVb4wHG2k?si=vvdtpwQh6YgGbaUI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <br>
    <div class="container">   
        </div>
    </div>
    </div>
</div>

</main>

@include('layouts.footer')
@endsection
