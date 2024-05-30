@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa ">
    <div class="left-container">
        <h1 class="title animated-element">Tenaga Admin</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
               Tenaga Admin merupakan individu yang meiliki tanggung jawab untuk mengelola dan mendukung operasi harian dalam perusahaan.
                Tenaga admin kami tidak hanya terampil dalam mengerjakan tugas rutin, mereka juga memegang prinsip efisiensi serta kemudahan sebagai landasan pelayanan. Dengan keahlian tenaga admin, kami berkomitment terhadap profesionalisme, dan tenaga yang memahami bahwa tenaga admin memiliki peran penting dalam mencapai keberhasilan
            </p>
            <p class="description">
                Dengan keahlian, kreativitas, keandalan dan layanan yang baik, tenaga admin kami juga berusaha untuk mengembangkan perusahaan anda. Kami percaya bahwa dengan Tenaga Admin yang kompeten, perusahaan Anda dapat mencapai tingkat efisiensi dan produktivitas yang lebih tinggi.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/tenagaAdmin.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
