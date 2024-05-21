@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/jasa/jasaIsi.css') }}">
@endsection

@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">External / Facade Cleaning</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Jika anda mencari cara yang mudah untuk memberihkan bangunan perusahaan anda, maka layanan kebersihan perusahaan kami adalah pilihan yang tepat dan terbaik. Kami juga mengerti akan konsep bahwa penampilan bersih dan rapi amat sangat berperan dalam menciptakan kesan ataupin citra yang positif bagi perusahaan.
            </p>
            <p class="description">
            Dengan tim kebersihan profesinal kami, perusahaan anda tidak perlu lagi khawatir terhadap kotoran, noda yang menggangu, dan sebagainya. Kami akan menerapka keahlian kami dan akan menjadikan bagunan anda menjadi bersinar dan akan terlihat seperti baru lagi.
            </p>
        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/kebersihan/isiFacade.jpg')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
