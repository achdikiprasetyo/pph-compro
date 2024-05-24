@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

@section('content')
<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element" data-animation="fadeIn">Jasa Kebersihan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                 Dengan tim yang terlatih dan peralatan yang sesuai, tim Cleaning Service kami siap membantu menjaga kebersihan
                di lingkungan perusahaan Anda. Layanan kebersihan kami mencakup  Hotel, Mall, Gedung Perkantoran, Perumahan, atau gedung yang masih dalam tahap pembangunan ataupun sudah dalam kondisi tertentu yang perlu perhatian khusus, terutama dalam bidang kebersihan agar tercipta sebuah kondisi properti yang bersih dan terawat.
            </p>
            <p class="description">
                
            </p>
            <p class="description">
                Sebagai perusahaan Outsourcing, kami memiliki tenaga, peralatan kebersihan dan mampu memberikan pelayanan di bidang berikut :
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

{{-- Pemisah dengan List Layanan --}}
<div class="separator animated-element" data-animation="fadeIn">Cakupan Dari Layanan Kebersihan sebagai berikut : </div>

<div class="container-wrapper animated-element">
    <a href="{{ route('jasa-kebersihan.regularCleaning') }}" style="text-decoration: none; color: inherit;">
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item">
                <img src="{{ asset('image/kebersihan/regular.jpg') }}" alt="Service Image">
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
                <img src="{{ asset('image/kebersihan/general.jpg') }}" alt="Service Image">
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
                <img src="{{ asset('image/kebersihan/facade.jpg') }}" alt="Service Image">
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
                <img src="{{ asset('image/kebersihan/peralatanKebersihan.jpg') }}" alt="Service Image">
                <a href="{{ route('jasa-kebersihan.penyediaPeralatanKebersihan') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Penyedia Peralatan Kebersihan</div>
                </div>
            </div>
        </div>
    </a>
</div>

@include('layouts.footer')
@endsection
