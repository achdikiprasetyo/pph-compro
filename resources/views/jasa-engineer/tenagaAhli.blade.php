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
                Perusahaan kami memiliki tim teknisi yang mahir dalam bidangnya dan memiliki semangat penuh untuk menyelesaikan setiap tantangan teknis yang ada diperusahaan anda. Dengan berkerja sama dengan kami, anda akan mendapatkan penyelesaian masalah teknis secara cepat dan efisien.
            </p>
            <p class="description">
                Selain menjadi penyedia Tenaga Ahli Teknisi, perusahaan kami juga siap membantu perkembangan perusahaan anda agar bisa berjalan dengan lancar. Dengan menggunakan tenaga ahli dari perusahaan kami, anda akan berinvestasi pada keandalan dan kinerja yang optimal dari tenaga ahli teknisi kami.
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/engineer/isiPenyedia.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection