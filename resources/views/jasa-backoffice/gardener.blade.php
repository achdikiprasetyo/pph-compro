@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Gardener</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Layanan Gardener di perusahaan kami menawarkan tenaga yang memahami akan keindahan untuk daerah sekitar perusahaan, taman, dan sebagainya. Tim gardener kami tidak hanya memotong rumput ataupun merawat tanaman, tetapi tim kami berdedikasi untuk menciptakan ruang yang indah dan nyaman.
            </p>
            <p class="description">
                Dengan tim ahli yang disediakan oleh laynan kami, mari menciptakan suasana yang nyaman di sekitar perusahaan anda, untuk memberikan pengalaman yang indah bagi calon pelanggan dan karyawan anda.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/gardener.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
