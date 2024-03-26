<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>About Us</title>
  <style>



    .container {
      max-width: 800px;
      margin: 0 auto;
    }

 
    .welcome-section {
      position: relative;
      text-align: center;
      color: #fff;
    }

    .welcome-section img {
      width: 100%;
      height: auto;
      opacity: 0.5; /* Opacity untuk menyesuaikan foto dengan teks */
    }

    .welcome-text {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .visual-elements {
      padding: 40px 0;
      text-align: center;
    }

    .visual-elements img {
      max-width: 100%;
      height: auto;
      border-radius: 8px; /* Contoh styling untuk gambar */
      animation: fadeIn 1s ease-out; /* Contoh animasi fadeIn */
    }

    .about-us img {
      max-width: 90%;
      height: auto;
      border-radius: 8px; /* Contoh styling untuk gambar */
      margin-bottom: 20px; /* Spasi antara gambar dan teks */
      text-align: center;
    }

    .organizational-structure img {
      max-width: 100%;
      height: auto;
      border-radius: 8px; /* Contoh styling untuk gambar */
      animation: fadeIn 1s ease-out;asi antara gambar dan teks */
    }

    .page-header {
      background-image: url("image/background.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      border: 0 none;
      margin: 0 auto;
      padding: 0;
      position: relative;
    }

    .page-header_wrap {
      padding: 60px 0;
      position: relative;	
      text-align: center;
    }

    .page-heading {
      z-index: 1;
      position: relative;
    }

    .page-heading h2, .page-heading h1 {
      font-size: 40px;
      color: #ffffff;
      margin: 0 auto;
    }


  </style>


</head>
<body>

  @include('layouts.navbar')


  </section>
  <br>
  <section class="about-us animated-element">
    <div class="container">
      <h2 class="animated-element" data-animation="fadeIn">Tentang Kami</h2>
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
  

  <section class="our-values">
    <div class="container animated-element" data-animation="fadeIn">
      <h2>Kenapa Harus Memimih Kami ?</h2>
      <ul>
        <li class="animated-element" data-animation="fadeIn"><strong>Berpengalaman:</strong> Memiliki sumber daya manusia yang berpengalaman dan mampu memberikan rasa aman dan nyaman kepada client.</li>
        <li class="animated-element" data-animation="fadeIn"><strong>Tenaga Kerja Professional:</strong> Tenaga kerja yang terlatih, terampil dan profesional dalam melayani client.</li>
        <li class="animated-element" data-animation="fadeIn"><strong>Pelayanan yang Memuaskan:</strong> Memiliki respond yang cepat, menyelesaikan pekerjaan dengan tepat dan senantiasa memberikan kepuasan dalam pelayanan.</li>
      </ul>
    </div>
  </section>

  <section class="visual-elements">
    <div class="container animated-element" data-animation="fadeIn">
      <h2>Struktur Organisasi</h2>
      <img src="image/struktur-organisasi.png" alt="Struktur Organisasi">
      <!-- Tambahkan teks atau deskripsi struktur organisasi di sini jika diperlukan -->
    </div>
  </section>

  <section class="visi-misi animated-element" data-animation="fadeIn">
    <div class="container">
  
      <h2>Visi :</h2>
      <p>Menjadi perusahaan penyedia dan pengelola jasa tenaga kerja yang <strong>Professional</strong>  dan <strong>Terpercaya</strong></p>
      <br>
      <h2>Misi</h2>
      <p>Meningkatkan kemakmuran dan kemajuan bersama, memberikan keamanan, kenyamanan, kepuasan dan keberhasilan kepada pengguna jasa</p>
    </div>
  </section>

  <section class="visual-elements">
    <div class="container">
      <img class="animated-element" data-animation="fadeIn" src="image/background.jpg" alt="Cool Image">
      <!-- Tambahkan elemen visual lainnya di sini -->
    </div>
  </section>


  @include('layouts.footer')


</body>
</html>
