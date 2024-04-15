@extends('layouts.navbar')

@section('page-css')
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('css/fasilitas.css') }}">
@endsection

@section('content')
{{-- APLIKASI ABSENSI ONLINE --}}
<div class="container-jasa">
    <div class="left-container animated-element">
        <h1 class="title">ABSENSI ONLINE PPH</h1>
        <p class="description">
            <strong>Absensi Online (AbsensiOn)</strong>
             yang disediakan oleh PPH merupakan fasilitas yang akan didapatkan ketika sudah saling bekerja sama. Berikut adalah fitur aplikasinya :
        <p class="description">
            <ul>
                <li>Mempermudah proses absensi</li>
                <li>Absensi dilakukan dengan foto selfie / scan ID Card Pegawai</li>
                <li>AbsensiOn dilengkapi dengan informasi data lokasi GPS secara Realtime</li>
                <li>Rekapan dapat ditarik bulanan dalam bentuk excel</li>
                <li>Hasil rekapan absensi setiap pegawai disertai keterangan telat, sakit, izin dan libur.</li>
            </ul>
    </div>
    {{-- foto absensi online --}}
    <div class="right-container animated-element">
        <img src="{{asset('image/fasilitas/absensiOnline.png')}}" alt="Gambar">
    </div>
</div>
{{-- APLIKASI KEAMANAN QR GUARD --}}
<div class="container-jasa animated-element">
    <div class="left-container">
        <h1 class="title">QR PATROL</h1>
        <p class="description">
            
            <strong>QR Patrol</strong> yang disediakan oleh PPH merupakan fasilitas yang akan didapatkan ketika sudah saling bekerja sama. Berikut adalah fitur aplikasinya :
        <p class="description">
            <ul>
                <li>Laporan Patroli yang dilakukan oleh Satpam dilaporkan secara Realtime</li>
                <li>Patroli dilakukan disetiap lokasi dengan QR Code yang telah dipasang disetiap POS</li>
                <li>Mengelola checkpoint tiap lokasi</li>
                <li>Patroli disertai foto lokasi disetiap checkpoint</li>
                <li>Pengiriman data patroli harus berada dicakupan daerah yang telah ditentukan melalui lokasi GPS dan realtime</li>
            </ul>
    </div>
    {{-- foto qr guard --}}
    <div class="right-container">
        <img src="{{asset('image/fasilitas/qrPatrol.png')}}" alt="Gambar">
    </div>
</div>

@include('layouts.footer')
@endsection
