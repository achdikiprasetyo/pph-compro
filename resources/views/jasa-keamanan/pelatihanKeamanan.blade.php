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
                Jika anda berkeinginan untuk memiliki lisensi resmi dan meningkatkan keterampilan serta pengalaman dalam bidang kemanan, kami siap untuk memberikan pelatihan Satpam yang berkualitas dan yang tentunya memiliki izin resmi. Dengan mengikuti program pelatihan kami, anda dipastikan akan menjadi garda terdepan yang dapat melindungi aset dan kemanan di berbagai situasi.


            <p class="description">
                Agar bisa untuk menjadi bagian dari Satuan Pengaman, anda perlu mengikuti pelatihan terlebih dahulu. Maka dari itulah kami siap menjadi penyelenggara dipelatihan berikut :
                <br>
                <li>Pelatihan Gada Pratama (<strong>Wajib</strong>)(<strong>Pendaftaran Masih dibuka</strong>)</li> 
                <li>Pelatihan Gada Madya (<strong>Pendaftaran Masih dibuka</strong>)</li>
                <li>Pelatihan Gada Utama (<strong>Pendaftaran Masih dibuka</strong>)</li>

                <br>
                Selain itu kami juga dapat memberikan pelatihan Lanjutan ataupun Pelatihan Khusus Seperti : 
                <li>Investigasi</li>
                <li>Pencegahan</li>
                <li>Pelatihan Pemadam Kebakaran</li>
                <li>Penyelamatan, SAR, K9, Menghadapi Bencana Alam</li>
                <li>Antisipasi Teror dan Barang Berbahaya</li>

        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiPelatihan.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
