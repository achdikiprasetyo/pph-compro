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
                    Dengan memiliki tenaga lebih seperti Office Girl, akan membuat bisnis anda akan menjadi lebih lancar dan nyaman. Hal itu dapat terjadi dikarenakan tenaga yang kami sediakan tidak hanya sekadar membantu, melainkan elemen untuk memastikan perusahaan anda tetap bersih dan dapat terlihat nyaman ketika dilihat calon pelanggan dan karyawan ditempat.
                </p>
                <p class="description">
                    Tenaga Office Girl yang kami sediakan sudah terlatih dengan baik dan dapat meringankan beban kerja di perusahaan anda. Dengan adanya Office Girl, anda akan mendapatkan kenyamanan dan ketenagan pikiran.
                </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/officeGirl.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
