@extends('layouts.navbar')

@section('page-css')
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endsection

@section('content')
<br>
<section class="about-us animated-element">
  <div class="container">
    <h2 class="animated-element" data-animation="fadeIn"><strong>Tentang Kami</strong></h2>
    <div class="row align-items-center">
      <div class="col-md-6 animated-element" data-animation="fadeIn">
        <picture>
            <source srcset="image/logo.png" media="(min-width: 768px)">
            <img src="image/logo.png" alt="Foto Direktur Utama" class="img-fluid rounded mb-4">
        </picture>
      </div>
      <div class="col-md-6 animated-element" data-animation="fadeIn">
        <br>
        <p class="animated-element" data-animation="fadeIn">
          <strong>PT. Panca Pilar Hutama</strong> merupakan perusahaan yang bergerak di bidang Penyedia Jasa Keamanan, Penyedia Jasa Tenaga Kebersihan, Penyedia Jasa Tenaga Engineering, Penyedia Jasa Tenaga Produksi, Pelatihan Tenaga Keamanan dan Pengelola Tenaga Kerja di berbagai bidang. PT Panca Pilar Hutama di dirikan pada tanggal 9 Februari 2018 sesuai dengan Nomor Akte Pendirian <strong>AHU - 0024362.AH.01.11.TAHUN 2018</strong> oleh notaris AYUB SUPARTO, S.H., M. Kn.
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
    <img class="animated-element" data-animation="fadeIn" src="image/pph.jpg" alt="Cool Image">
  </div>
</section>
<style>
img.no-download {
    pointer-events: none; /* Menonaktifkan interaksi mouse */
    user-select: none; /* Mencegah pengguna dari memilih teks */
    -webkit-touch-callout: none; /* Mencegah menu konteks muncul di perangkat mobile */
    -webkit-user-drag: none; /* Mencegah pengguna dari men-drag gambar */
}

.img-certification {
    width: 100%;
    max-width: 200px;
    height: auto;
    display: block;
    margin: 0 auto 20px auto;
}

@media (min-width: 768px) {
    .img-certification {
        max-width: 150px;
    }
}

@media (min-width: 992px) {
    .img-certification {
        max-width: 200px;
    }
}

.image-container {
    position: relative;
    display: inline-block;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(255, 255, 255, 0); /* Transparan */
}

.row.align-items-center {
    display: flex;
    align-items: center;
}
</style>
<section class="visi-misi animated-element" data-animation="fadeIn">
  <div class="container">
    <h2><strong>Sertifikasi dan Legalitas Kami :</strong></h2>
    <p>Sebagai perusahaan outsourcing yang terpercaya, kami telah memiliki semua legalitas yang dibutuhkan untuk memberikan layanan yang terbaik untuk client kami. Kami memastikan semua operasional kami telah sesuai dengan regulasi yang berlaku. Kami melakukan hal tersebut karena ingin memberikan kepercayaan penuh untuk client kami bahwa mereka telah memilih partner lerja sama yang profesional dan dapat diandalkan. Berikut adalah  beberapa legalitas dan Sertifikasi kami : 
  </div>
  <div class="container">
    <ul class="list-unstyled">
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
          
          </div>
          <div class="col">
            <strong>Ijazah Gada Utama</strong>
            <br>
            Nama : Fahrudin, S.T.
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
          </div>
          <div class="col">
            <strong>Ijazah Gada Utama</strong>
            <br>
            Nama : Hendra Harianto
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
          </div>
          <div class="col">
            <strong>Ijazah Gada Utama</strong>
            <br>
            Nama : Setyawan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
          </div>
          <div class="col">
            <strong>Ijazah Gada Utama</strong>
            <br>
            Nama : Agoes Hadi Poernomo
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
          </div>
          <div class="col">
            <strong>Sertifikat K3</strong>
            <br>
            Nama : Mashur
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">

          </div>
          <div class="col">
            <strong>Sertifikat CCPS Komisaris</strong>
            <br>
            Nama : Setyawan, ST,
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
 
          </div>
          <div class="col">
            <strong>Sertifikat POP Komisaris</strong>
            <br>
           Nama : Setyawan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
          
          </div>
          <div class="col">
        <strong>Izin Usaha Perusahaan Penerima Pemborongan Pekerjaan</strong>
        <br>
        Nomer : 08.8/14/01/III/2020
        <br>
          </div>
        </div>
      </li>
      <hr>
      <!-- Add other list items with images similarly -->
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Keterangan Domisili Usaha</strong>
           <br>
           Nomor : 470/58/438.7.1.23/2023
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Izin Operasional Badan Usaha Jasa Pelatihan Keamanan</strong>
           <br>
           Nomor : 9129297941927006
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> NPWP </strong>
           <br>
           Nomor : 84.284.272.6-603.000
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Tanda Daftar Perusahaan Perorangan </strong>
           <br>
           Nomor : 503/12/438.7.10/2018
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Izin Kementrian Investasi/Badan Koordinasi Penanaman Modal Republik Indonesia </strong>
           <br>
           Nomor : 1136/I/SIO-POLRI/2023
          </div>
        </div>
      </li>
      <hr>
      
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Keterangan Tanda Anggota APSI </strong>
           <br>
           Nomor : 089.1/DPP-APSI/SKTA-GU/X/2020
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Keterangan Tanda Anggota ABUJAPI </strong>
           <br>
           Nomor : 02700/05-09-2019
          </div>
        </div>
      </li>
      <hr>
      
      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Keterangan Terdaftar (SKT) </strong>
           <br>
           Nomor : S-2952KT/WPJ.24/KP.0103/2018
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Izin Usaha Lembaga Penempatan Tenaga Kerja Swasta </strong>
           <br>
           NIB : 9120207941927
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Izin Perdagangan Mikro </strong>
           <br>
           Nomor : 510/13/483.10/2018
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Keterangan Domisili Usaha </strong>
           <br>
           Nomor : 470/58/438.7.1.23/2023
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Mutu Perkasa ISO 9001:2015 </strong>
           <br>
           Nomor : 0623 - QMS
          </div>
        </div>
      </li>
      <hr>


      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Keterangan Kementrian Hukum dan HAM </strong>
           <br>
           Nomor : AHU-0009113.AH01.01.TAHUN 2018
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Keterangan Tanda Anggota APKLINDO </strong>
           <br>
           Nomor : TA/768P/SDJ/IX/2020
          </div>
        </div>
      </li>
      <hr>

      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
           <strong> Surat Pengukuhan Pengusaha Kena Pajak </strong>
           <br>
           Nomor : S-301PKP/WPJ.24/KP0103/2018
          </div>
        </div>
      </li>
      <hr>


      <li class="animated-element" data-animation="fadeIn">
        <div class="row align-items-center">
          <div class="col-auto">
            
          </div>
          <div class="col">
            <li class="animated-element" data-animation="fadeIn">
              <p style="color:#007bff;">Dan masih banyak lagi sertifikasi lainnya...</p>
            </li>
          </div>
        </div>
      </li>
      <hr>
      
    </ul>
  </div>
</section>

@include('layouts.footer')

@endsection
