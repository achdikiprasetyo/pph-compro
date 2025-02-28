@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
<div class="container-jasa animated-element">
    <div class="left-container">
        <h1 class="title">Jasa Backoffice</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12"> 
                <p class="description">
                     Perusahaan kami berkomitmen untuk mendukung kesuksesan perusahaan anda untuk mencapai target yang telah ditentukan. Maka dari itulah diperlukan tenag pendukung yang kompeten guna membantu proses pencapaian target Perusahaan.
                </p>
                <p class="description">
                    Perusahaan kami menyediakan tenaga kerja yang terampil untuk membantu anda dalam pencapaian pekerjaan di masing-masing bidang, adapun pelayanan pendukung yang dapat kami berikan yakni :
                </p>
                <table>
                    <ul>
                        <li>Tenaga Admin, Data Entry, Receptionist, dan Operator Parkir</li>
                        <li>Customer Service, Kasir, dan Marketing</li>
                        <li>Driver, Gardener, Office Boy, Office Girl, Kurir dan Perawatan Kolam</li>
                        
                    </ul>
                </table>
            </div>
        </div>
    </div>
    <div class="right-container">
        <img src="{{asset('image/jasa/resepsionisLandscape.png')}}" alt="Gambar">
    </div>
</div>
    {{-- Pemisah dengan list jasa backoffice --}}
    <div class="separator animated-element">Cakupan Dari Layanan Pelatihan sebagai berikut : </div>

    <div class="container-wrapper animated-element">
       
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/admin.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.admin') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Tenaga Admin</div>
                    </div>
                </div>
            </div>
        
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/2.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.dataEntry') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Data Entry</div>
                    </div>
                </div>
            </div>
    
            <div class="container-box">
                <div class="list-item animated-element">
                    <img src="{{ asset('image/backoffice/4.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.callCenter') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Call Center</div>
                        
                    </div>
                </div>
            </div>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/5.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.operatorParkir') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Operator Parkir</div>
                        
                    </div>
                </div>
            </div>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/resepsionis.png') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.resepsionis') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Receptionist</div>
                       
                    </div>
                </div>
            </div>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/6.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.cs') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Customer Service</div>

                    </div>
                </div>
            </div>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/8.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.marketing') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Marketing</div>

                    </div>
                </div>
            </div>

        {{--  --}}
        {{-- <a href="{{ route('jasa-backoffice.sales') }}" style="text-decoration: none; color: inherit;">
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/9.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.sales') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Sales</div>

                    </div>
                </div>
            </div>
        </a> --}}

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/10.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.driver') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Driver</div>

                    </div>
                </div>
            </div>
    
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/11.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.officeBoy') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Office Boy</div>

                    </div>
                </div>
            </div>
        
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/12.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.officeGirl') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Office Girl</div>

                    </div>
                </div>
            </div>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/13.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.kurir') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Kurir</div>

                    </div>
                </div>
            </div>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/jasa/kasir.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.kasir') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Kasir</div>

                    </div>
                </div>
            </div>

            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/14.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.gardener') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Gardener</div>

                    </div>
                </div>
            </div>
 
            <div class="container-box animated-element">
                <div class="list-item">
                    <img src="{{ asset('image/backoffice/15.jpg') }}" alt="Service Image">
                    <a href="{{ route('jasa-backoffice.perawatanKolam') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="text-content">
                        <div class="service-title">Perawatan Kolam</div>

                    </div>
                </div>
            </div>
        
    </div>
    @include('layouts.footer')
@endsection
