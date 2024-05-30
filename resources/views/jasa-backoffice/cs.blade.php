@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Customer Service</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Memiliki koneksi yang baik dengan pelanggan merupakan suatu hal yang sangat penting dalam berbinis. Oleh karena itu, kami hadir untuk membantu perusahaan Anda membangun hubungan yang kuat melalui layanan customer service yang profesional dan bersahabat. Kami percaya bahwa setiap interaksi dengan pelanggan/klien adalah kesempatan untuk menciptakan pengalaman positif yang akan meningkatkan loyalitas pelanggan.
            </p>
            <p class="description">
                Kami memahami bahwa setiap pelanggan unik dan memiliki kebutuhan yang berbeda. Oleh karena itu, tim kami dilengkapi dengan keterampilan komunikasi yang efektif untuk menyesuaikan pendekatan mereka dengan situasi yang spesifik. Dengan layanan customer service kami, Anda dapat memastikan bahwa setiap pelanggan merasa dihargai dan diperhatikan.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/cs.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
