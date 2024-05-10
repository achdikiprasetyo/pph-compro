@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Sales</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
                <p class="description">
                    Sebagai mitra , kami menawarkan pengalaman yang andal, peningkatan penjualan, serta kami tidak hanya menawarkan layanan, melainkan solusi yang dapat meningkatkan kinerja dan pertumbuhan perusahaan anda.
                </p>
                <p class="description">
                    Tim sales yang telah disediakan oleh kami merupakan tenaga profesional yang siap membantu perusahaan anda untuk mencapai kesuksesan. Dengan pendekatan yang sesuai dan ramah, kami tidak hanya menawarkan layanan melainkan kemitraan yang berkelanjutan.
                </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/sales.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection