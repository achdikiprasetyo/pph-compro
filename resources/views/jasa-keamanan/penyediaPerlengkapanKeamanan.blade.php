@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Penyedia Perlengkapan Keamanan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Satpam pasti membutuhkan peralatan penunjang ketika bertugas, maka dari itu diperlukan persiapan yang matang karena, peralatan keamanan adalah kunci kesuksesan dalam bertugas.
                Perusahaan kami siap menjadi mitra yang handal dalam menyediakan perlengkapan keamanan yang terbaik dan berkualitas. Selain itu kami juga berkomitmen untuk memberikan solusi yang efektif dan efisien untuk meningkatkan peluang kemitraan yang berkelanjutan. 
            </p>
            <p class="description">
                Kami akan memastikan bahwa setiap perlengkapan yang disediakan memiliki kualitas tinggi dan bukan barang bekas atau murahan. Selain itu, Anda tidak perlu lagikhawatir dengan permasalahan keamanan karena, satpam akan dilengkapi dengan peralatan yang tepat untuk menjalankan tugas dengan optimal. 
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiPenyedia.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
