@extends('layouts.navbar')
<style>
            .container-box:hover {
            transform: scale(1.05);
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
    <div class="left-container animated-element" >
        <h1 class="title">Karir PT. Panca Pilar Hutama</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p>
                    Kami membuka peluang karir untuk individu yang bersemangat dan berkomitmen tinggi untuk tumbuh bersama kami. PT Panca Pilar Hutama, sebagai perusahaan yang terus berkembang, membuka pendaftaran untuk sejumlah posisi yang menarik!
                </p>
            
                <p><strong>Apa yang Kami Tawarkan:</strong></p>
                <ul>
                    <li>Peluang Pengembangan Karir yang Luas</li>
                    <li>Lingkungan Kerja yang Inspiratif</li>
                    <li>Proyek-proyek Menarik dan Tantangan yang Memacu</li>
                </ul>
            
                <p><strong>Posisi yang Dibuka:</strong></p>
                <ul>
                    <li>Satpam</li>
                    <li>Cleaning Service</li>
                    <li>Admin</li>
                    <li>Engineer (dan banyak lagi!)</li>
                </ul>
            
                <p><strong>Pendaftaran Masih Terbuka :</strong></p>
                <p>
                    Selagi posisi di bawah masih tampil diwebsite, Anda masih memiliki kesempatan untuk mendaftar/melamar. Segera Kirimkan berkas pendaftaran anda dengan menekan foto dibawah, sesuai dengan keahlian anda.
                </p>
            

            </div>
        </div>
    </div>
    <div class="right-container animated-element">
        <img src="{{asset('image/karir.png')}}" alt="Gambar">
    </div>
</div>


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
