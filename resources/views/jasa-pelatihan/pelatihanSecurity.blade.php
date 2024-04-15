@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Pelatihan Keamanan</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Jika perusahaan anda menginginkan keamanan yang ketat dan tak tergoyahkan, kami siap memberikan pelatihan keamanan Satpam yang berkulitas tinggi dan berlisensi. Dengan program pelatihan keamanan, mereka akan menjadi garda terdepan yang siap melindungi aset dan keamanan perusahaan anda.
            <p class="description">
                Dalam pelatihan keamanan, kami akan memastikan bahwa setiap anggota satpam telah dilatih secara menyeluruh dengan keterampilan yang baik. Bekerja sama dengan kami tidak hanya menciptakan penjaga yang kuat, melainkan satpam yang terampil dan siap untuk menghadapi berbagai permasalahan kemanan di perusahaan anda.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/jasa/jasaKebersihan.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection