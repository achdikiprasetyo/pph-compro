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
                Jika anda berkeinginan untuk memiliki lisensi resmi dan meningkatkan keterampilan serta pengalaman dalam bidang kemanan, kami siap memberikan pelatihan Satpam yang berkualitas dan  tentunya telah memiliki izin resmi. Dengan mengikuti program pelatihan kami, Anda dipastikan akan menjadi garda terdepan yang dapat melindungi aset dan kemanan di berbagai situasi.


            <p class="description">
                Untuk menjadi bagian dari Satuan Pengaman, anda perlu mengikuti pelatihan terlebih dahulu. Kami sebagai penyelenggara pelatihan, menawarkan :
                <br>
                <ul>
                    <li>Pelatihan <strong>Dasar</strong> Gada Pratama (<strong>Pendaftaran Masih dibuka</strong>)</li> 
                    <li>Pelatihan <strong>Menengah</strong> Gada Madya (<strong>Pendaftaran Masih dibuka</strong>)</li>
                    <li>Pelatihan <strong>Lanjutan</strong> Gada Utama (<strong>Segera Hadir</strong>)</li>
                </ul>

                Selain itu kami juga dapat memberikan Pelatihan Lanjutan dan Pelatihan Khusus Seperti : 
                <ul>
                    <li>Investigasi</li>
                <li>Pencegahan</li>
                <li>Pelatihan Pemadam Kebakaran</li>
                <li>Penyelamatan, SAR, K9, Menghadapi Bencana Alam</li>
                <li>Antisipasi Teror dan Barang Berbahaya</li>
                </ul>

        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/keamanan/isiPelatihan.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
