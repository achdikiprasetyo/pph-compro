@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Tenaga Ahli Teknisi</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Perusahaan kami memiliki tim teknisi yang mahir dalam bidangnya dan memiliki semangat penuh untuk menyelesaikan setiap tantangan teknis yang ada diperusahaan anda. Tenaga Kerja Teknisi kami  tidak hanya menyelesaikan masalah secara cepat dan efisien, tetapi juga memberikan saran untuk meningkatkan efisiensi dan mengoptimalkan proses bisnis Anda. Berbeda dengan teknisi biasa, teknisi ahli kami memiliki kemampuan untuk menangani masalah kompleks, membuat keputusan teknis yang tepat, serta memimpin dan melatih orang lain.
            </p>
            <p class="description">
                Dengan menggunakan tenaga kerja teknisi kami, Anda telah  berinvestasi pada solusi jangka panjang yang akan meningkatkan keandalan dan kinerja sistem Anda, sehingga meningkatkan produktivitas dan keuntungan perusahaan Anda
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/engineer/isiTenagaAhli.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection