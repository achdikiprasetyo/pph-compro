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

    .container-wrapper {
            display: flex;
            justify-content: center; /* Center align the flex container */
            flex-wrap: wrap; /* Enable wrapping for smaller screens */
        }

        .container-box {
            max-width: 400px;
            margin: 20px;
            float: none; /* Reset float */
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease; /* Add transition effect */
        }

        .list-item {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .list-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px 10px 0 0;
        }

        .text-content {
            padding: 15px;
            background-color: #fff;
        }

        .service-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .service-description {
            font-size: 14px;
            color: #666;
        }

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
            margin-top: 0; 
        }

        @media (max-width: 768px) {
            .container-jasa {
                flex-direction: column;
            }
        }



    
</style>



@section('content')
<div class="container-jasa animated-element">
    <div class="left-container">
        <h1 class="title">Jasa Backoffice</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
              

                <p class="description">
                    Layanan Backoffice yang disediakan oleh perusahaan kami akan berusaha untuk mendukung keberhasilan diperusahaan anda untuk mencapai target yang telah ditentukan. Maka dari itulah diperlukan beberapa tenaga supporting yang dapat membantu proses Pencapaian target Perusahaan.
                </p>
                <p class="description">
                    PT. Panca Pilar Hutama menyediakan tenaga yang terampil untuk membantu dalam pencapaian pekerjaan di masing-masing bidang, adapun pelayanan pendukung yang dapat kami berikat yakni :
                </p>
                <table>
                    <ul>
                        <li>Tenaga Admin, Data Entry, Receptionist, Call Center dan Operator Parkir</li>
                        <li>Customer Service, Kasir, Marketing dan Sales</li>
                        <li>Driver, Office Boy, Office Girl, dan Kurir</li>
                        <li>Gardener dan Perawatan Kolam</li>
                    </ul>
                </table>
            </div>
        </div>
    </div>
    <div class="right-container">
        <img src="{{asset('image/jasa/jasaBackoffice.png')}}" alt="Gambar">
    </div>
</div>


    <div class="separator animated-element">Cakupan Dari Layanan Pelatihan sebagai berikut : </div>

    <div class="container-wrapper animated-element">
        <a href="{{ route('jasa-backoffice.admin') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/admin.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.admin') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Tenaga Admin</div>

                    </div>
                </div>
            </div>
        </a>
    
        <a href="{{ route('jasa-backoffice.dataEntry') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/2.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.dataEntry') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Data Entry</div>

                    </div>
                </div>
            </div>
        </a>
    
        <a href="{{ route('jasa-backoffice.resepsionis') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/3.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.resepsionis') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Receptionist</div>
                       
                    </div>
                </div>
            </div>
        </a>
    
        <a href="{{ route('jasa-backoffice.callCenter') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box">
                <div class="list-item animated-element">
                    <img src="{{ asset('image/backoffice/4.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.callCenter') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Call Center</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.operatorParkir') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/5.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.operatorParkir') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Operator Parkir</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.cs') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/6.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.cs') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Customer Service</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.kasir') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/4.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.kasir') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Kasir</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.marketing') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/8.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.marketing') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Marketing</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.sales') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/9.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.sales') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Sales</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.driver') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/10.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.driver') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Driver</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.officeBoy') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/11.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.officeBoy') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Office Boy</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.officeGirl') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/12.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.officeGirl') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Office Girl</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.kurir') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/13.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.kurir') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Kurir</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.gardener') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/4.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.gardener') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Gardener</div>

                    </div>
                </div>
            </div>
        </a>

        <a href="{{ route('jasa-backoffice.perawatanKolam') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element  ">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/4.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.perawatanKolam') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Perawatan Kolam</div>

                    </div>
                </div>
            </div>
        </a>
    
        <!-- Add more boxes with different images as needed -->
    
    </div>
@endsection
