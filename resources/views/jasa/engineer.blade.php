@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasa.css') }}">
@endsection

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
                    Kami menyediakan sebuah pelayanan yang terbaik dalam bidang perawatan dan pemeliharaan Gedung. Layanan kami memberikan beberapa penawaran untuk Jasa Teknisi / Engineer yakni :
                </p>
                <table>
                    <ul>
                        <li class="animated-element" data-animation="fadeIn">Penyedia Jasa Tenaga Teknisi</li>
                        <li class="animated-element" data-animation="fadeIn">Penyedia Jasa Tenaga Ahli</li>
                      
                    </ul>
                </table>
            </div>
        </div>
    </div>
    <div class="right-container animated-element" data-animation="fadeIn">
        <img src="{{asset('image/jasa/jasaTeknisi.png')}}" alt="Gambar">
    </div>
</div>

{{-- Pemisah dengan list Layanan --}}
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

@include('layouts.footer')
@endsection
