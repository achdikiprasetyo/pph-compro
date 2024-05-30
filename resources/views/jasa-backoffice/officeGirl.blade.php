@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Office Girl</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Sama seperti Office Boy, dengan memiliki tenaga lebih seperti Office Girl,  urusan bisnis anda akan menjadi lebih lancar dan nyaman. Hal itu dapat terjadi dikarenakan tenaga Office Girl merupakan staf pendukung operasional yang memiliki tanggung jawab untuk menjaga kebersihan, keindahan, dan kenyamanan lingkunan kerja, serta membantu tugas administratif ringan. Peran Office Girl sangatlah penting dalam memastikan operasional kantor dapat berjalan dengan lancar dan efisen.
                </p>
                <p class="description">
                    Tenaga Office Girl yang kami sediakan sudah terlatih dengan baik dan dapat meringankan beban kerja di perusahaan anda. Dengan adanya Office Girl, anda akan mendapatkan kenyamanan dan ketenagan fikiran, karena mereka pasti akan memastikan lingkungan kerja selalu dalam kondisi optimal.
                </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/officeGirl.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
