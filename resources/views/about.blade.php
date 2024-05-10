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
        <picture>
            <source srcset="image/logo.png" media="(min-width: 768px)">
            <img src="image/logo.png" alt="Foto Direktur Utama" class="img-fluid rounded mb-4">
        </picture>
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
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/ijazah_fahrudin.png')}}" alt="Ijazah Gada Utama" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Ijazah Gada Utama
            <br>
            Nama : Fahrudin, S.T.
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/ijazah_hendra.png')}}" alt="Ijazah Gada Utama" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Ijazah Gada Utama
            <br>
            Nama : Hendra Harianto
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/ijazah_setyawan.png')}}" alt="Ijazah Gada Utama" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Ijazah Gada Utama
            <br>
            Nama : Setyawan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/ijazah_agoes.png')}}" alt="Ijazah Gada Utama" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Ijazah Gada Utama
            <br>
            Nama : Agoes Hadi Poernomo
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/sertifikat_k3.png')}}" alt="Sertifikat K3" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Sertifikat K3
            <br>
            Nama : Mashur
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/sertifikat_ccps.png')}}" alt="Sertifikat CCPS Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Sertifikat CCPS Komisaris
            <br>
            Nama : Setyawan, ST,
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/sertifikat_pop.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Sertifikat POP Komisaris
            <br>
           Nama : Setyawan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset ('image/legalitas/akta.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Akte Pendirian
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/surat_izin_usaha.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
        Izin Usaha Perusahaan Penerima Pemborongan Pekerjaan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/surat_domisili.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Surat Keterangan Domisili Usaha
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/tdp.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            TDP
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/pajak.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Pengukuhan Pengusaha Kena Pajak
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/sio_jasa.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Surat Izin Operasional Pelatihan Jasa Pelatihan Keamanan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/sio.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Suart Izin Operasional Mabes Polri
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/bpjs_kesehatan.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Kepesertaan BPJS Kesehatan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/bpjs_ketenaga.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Kepesertaan BPJS Ketenaga Kerjaan
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/oss.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            OSS (Online Single Submission)
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/asosiasi.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            Asosiasi Badan Usaha Jasa Pengamanan Indonesia
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/apsi.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            APSI
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <div class="row">
          <div class="col-auto">
            <img src="{{asset('image/legalitas/apklindo.png')}}" alt="Sertifikat POP Komisaris" class="img-fluid no-download rounded mr-2" style="width: 50px;">
          </div>
          <div class="col">
            APKLINDO
          </div>
        </div>
      </li>
      <hr>
      <li class="animated-element" data-animation="fadeIn">
        <p style="color:#007bff;">Dan masih banyak lagi sertifikasi lainnya...</p>
      </li>
      <!-- Add other list items with images similarly -->
    </ul>
  </div>
</section>

@include('layouts.footer')

@endsection
