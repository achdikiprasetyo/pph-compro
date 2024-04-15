@extends('layouts.navbar')

@section('page-css')
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<br>
<section class="about-us animated-element">
  <div class="container">
    <h2 class="animated-element" data-animation="fadeIn"><strong>Tentang Kami</strong></h2>
    <div class="row">
      <div class="col-md-6 animated-element" data-animation="fadeIn">
        <img src="image/logo.png" alt="Foto Direktur Utama" class="img-fluid rounded mb-4">
      </div>
      <div class="col-md-6 animated-element" data-animation="fadeIn">
        <br>
        <p class="animated-element" data-animation="fadeIn">
          <strong>PT. Panca Pilar Hutama</strong> adalah perusahaan yang bergerak di bidang Penyedia Jasa Keamanan, Penyedia Jasa Tenaga Kebersihan, Penyedia Jasa Tenaga Engineering, Penyedia Jasa Tenaga Produksi, Pelatihan Tenaga Keamanan dan Pengelola Tenaga Kerja di berbagai bidang.
        </p>
        <p class="animated-element" data-animation="fadeIn">
          <strong>PT. Panca Pilar Hutama</strong> memiliki legalitas resmi dan telah diakui oleh instansi terkait, berkantor pusat di Kota Sidoarjo. Kami siap memenuhi kebutuhan tenaga kerja yang profesional dan berpengalaman. Kami selalu menjalin hubungan kerja jangka panjang dengan berbagai institusi dengan tujuan menjadi partner yang terpercaya dan saling menguntungkan.
        </p>
        <p class="animated-element" data-animation="fadeIn">
          <strong>PT. Panca Pilar Hutama</strong> senantiasa mendukung dan memberikan pelayanan terbaik untuk semua pelanggan serta memberikan komitmen yang tinggi agar kepuasan dan keberhasilan bisnis mitra dapat tercapai.
        </p>
      </div>
    </div>
  </div>
</section>

{{-- ALASAN MEMILIH KAMI --}}
<section class="our-values">
  <div class="container animated-element" data-animation="fadeIn">
    <h2><strong>Kenapa Harus Memilih Kami ?</strong></h2>
    <ul>
      <li class="animated-element" data-animation="fadeIn"><strong>Berpengalaman:</strong> Memiliki sumber daya manusia yang berpengalaman dan mampu memberikan rasa aman dan nyaman kepada client.</li>
      <li class="animated-element" data-animation="fadeIn"><strong>Tenaga Kerja Professional:</strong> Tenaga kerja yang terlatih, terampil dan profesional dalam melayani client.</li>
      <li class="animated-element" data-animation="fadeIn"><strong>Pelayanan yang Memuaskan:</strong> Memiliki respond yang cepat, menyelesaikan pekerjaan dengan tepat dan senantiasa memberikan kepuasan dalam pelayanan.</li>
    </ul>
  </div>
</section>

{{-- FOTO STRUKTUR ORGANISASI --}}
<section class="visual-elements">
  <div class="container animated-element" data-animation="fadeIn">
    <h2><strong>Struktur Organisasi</strong></h2>
    <img src="image/struktur-organisasi.png" alt="Struktur Organisasi">
   
  </div>
</section>

{{-- VISI MISI --}}
<section class="visi-misi animated-element" data-animation="fadeIn">
  <div class="container">
    <h2><strong>Visi :</strong></h2>
    <p>Menjadi perusahaan penyedia dan pengelola jasa tenaga kerja yang <strong>Professional</strong>  dan <strong>Terpercaya</strong></p>
    <br>
    <h2><strong>Misi : </strong></h2>
    <p>Meningkatkan kemakmuran dan kemajuan bersama, memberikan <strong> keamanan, kenyamanan, kepuasan</strong> dan <strong>keberhasilan</strong> kepada pengguna jasa</p>
  </div>
</section>

<section class="visual-elements">
  <div class="container">
    <img class="animated-element" data-animation="fadeIn" src="image/background.jpg" alt="Cool Image">
  </div>
</section>

@include('layouts.footer')

@endsection

