@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Office Boy</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Dengan memiliki tenaga lebih seperti Office Boy, akan membuat urusan bisnis anda akan menjadi lebih lancar dan nyaman. Hal itu dapat terjadi dikarenakan tenaga Office Boy merupakan staf pendukung operasional yang memiliki tanggung jawab untuk menjaga kebersihan, keindahan, dan kenyamanan lingkunan kerja, serta membantu tugas ringan administratif. Peran Office Boy sangatlah penting dalam memastikan operasional kantor dapat berjalan dengan lancar dan efisen.

            </p>
            <p class="description">
                Tenaga office boy yang kami sediakan sudah terlatih dengan baik dan dapat meringankan beban kerja di perusahaan anda. Dengan adanya Office Boy, anda akan mendapatkan kenyamanan dan ketenagan fikiran, karena mereka pasti akan memastikan lingkungan kerja selalu dalam kondisi optimal.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/officeBoy.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
