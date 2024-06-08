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
                    Properti yang terawat dengan baik tidak hanya menciptakan lingkungan yang nyaman, tetapi juga memberikan rasa aman bagi penghuninya. Kami memastikan semua sistem instalasi gedung Anda terjaga dengan baik menggunakan pendekatan proaktif berbasis Corrective Action, Preventive Action, dan Defect Repair. Dukungan dari tenaga ahli berpendidikan tinggi dan berpengalaman, yang didukung oleh sertifikasi dan instalasi terkait, memastikan layanan berkualitas tertinggi.
                </p>
                <p class="description animated-element" data-animation="fadeIn">
                    Kami menyediakan sebuah pelayanan yang terbaik dalam bidang perawatan dan pemeliharaan Gedung. Layanan tenaga teknisi memberikan beberapa penawaran untuk Jasa Teknisi / Engineer yakni :
                </p>
                <table>
                    <ul>
                        <li class="animated-element" data-animation="fadeIn">Penyedia Jasa Tenaga Teknisi</li>
                        <li class="animated-element" data-animation="fadeIn">Penyedia Jasa Tenaga Ahli</li>
                    </ul>
                </table>
                <p>
                    Dengan mempercayakan perawatan gedung Anda kepada kami, Anda dapat fokus pada aktivitas inti bisnis Anda tanpa khawatir tentang masalah teknis. Jangan biarkan masalah teknis mengganggu produktivitas Anda. Hubungi kami sekarang untuk mendapatkan solusi perawatan gedung yang tepat untuk kebutuhan Anda.
                </p>
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
    
        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item">
                <img src="{{ asset('image/engineer/penyedia.jpg') }}" alt="Service Image">
                <div class="text-content">
                    <a href="{{ route('jasa-engineer.tenagaTeknisi') }}" class="read-more-button">Baca Selengkapnya</a>
                    <div class="service-title">Tenaga Teknisi</div>
                </div>
            </div>
        </div>

        <div class="container-box animated-element" data-animation="fadeIn">
            <div class="list-item ">
                <img src="{{ asset('image/engineer/tenagaAhli.jpg') }}" alt="Service Image">
                <a href="{{ route('jasa-engineer.tenagaAhli') }}" class="read-more-button">Baca Selengkapnya</a>
                <div class="text-content">
                    <div class="service-title">Tenaga Ahli</div>
                </div>
            </div>
        </div>

</div>

@include('layouts.footer')
@endsection
