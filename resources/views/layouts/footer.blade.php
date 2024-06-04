@include('layouts.whatsapp')
@include('layouts.penawaran')
@include('layouts.faq')
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Footer Responsif</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    body {
      font-family: "Poppins", sans-serif;
      margin: 0;
      padding: 0;
    }

    footer {
      background-color: #082230;
      color: #fff;
      padding: 20px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    .footer-section {
      flex: 1;
      margin: 10px;
    }

    .footer-section h3 {
      color: #00A9FF;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .branch-offices {
      order: 1;
    }

    .headquarters-list {
      order: 2;
    }

    .footer-navigation {
      order: 3;
    }

    .footer-navigation a {
      color: #fff;
      text-decoration: none;
      margin-right: 15px;
    }

    .hubungi-kami {
      order: 4;
    }

    .hubungi-kami p {
      margin: 5px 0;
    }

    .icon {
      margin-right: 5px;
    }

    @media (max-width: 768px) {
      .footer-section {
        flex-basis: 100%;
        order: 0;
      }

      .hubungi-kami {
        text-align: left;
        order: 5;
        font-size: 1px;
      }

      .copyright {
        flex-basis: 100%;
        text-align: center;
        padding: 10px;
        background-color: #333;
        color: #fff;
        font-size: 12px;
      }

      h3{
        font-size:20px;
      }

      p{
        font-size:15px;
      }

      .footer-navigation{
        font-size:15px;
      }

      .size-hubungi{
        font-size:13px;
      }
      
    }

    .copyright {
      flex-basis: 100%;
      text-align: center;
      padding: 10px;
      background-color: #333;
      color: #fff;

    }

  </style>
</head>
<body>
  <footer class="animated-element" data-animation="fadeIn">
    <div class="footer-section branch-offices">
      <h3>Kantor Pusat</h3>
      <strong>Sidoarjo</strong>
      <p>Perumahan Kahuripan Nirwana Village Blok BA2 No.1, Sumput, Kec. Sidoarjo, Jawa Timur</p>
    </div>

    <div class="footer-section headquarters-list">
      <h3>Kantor Cabang</h3>
      <p> <strong>Makassar</strong>
        <br>
        Jl. Anuang No. 15E, Makassar, Kota Makassar, Sulawesi Selatan, 90142
      </p>
      <p> <strong>Bandar Lampung</strong>
      <br>
        Jl. Timor III No.34, Sinar Baru Kuripan, Teluk Betung Barat, Bandar Lampung, 35232
      </p>
      <p> <strong>Tanggerang Selatan</strong>
      <br>
        Perumahan Serpong Garden 1 Blok Cluster Green River D 9 No.36, Cibogo, Cisauk, Tanggerang Selatan
      </p>
      <p> <strong>Jawa Tengah</strong>
        <br>
        Perum Cluster Nirwana Blok B.8 Jl. Tanjung Koro RT 01 RW 07 , Cinderejo, Kec Tingkir Lor, Kabupaten Salatiga, Jawa Tengah 
      </p>
    </div>

    <div class="footer-section footer-navigation">
      <h3>Navigasi</h3>
      <a href="{{route('home')}}">Beranda</a>
      <a href="{{route('about')}}">Tentang Kami</a>
      <a href="{{route('articles.index')}}">Artikel</a>
      <a href="{{route('kontak')}}">Kontak</a>
      <a href="{{route('fasilitas')}}">Fasilitas</a>
      <a href="{{route('karir')}}">Karir</a>
      <a href="{{route('dokumentasi.kegiatan')}}">Dokumentasi</a>
    </div>

    <div class="footer-section hubungi-kami">
      <h3>Hubungi Kami</h3>

      <p>
        <a class="size-hubungi" href="https://www.facebook.com/PancaPilarHutama/" target="_blank" style="color: #ffffff;"><i class="icon fab fa-facebook"></i> PT. PANCA PILAR HUTAMA</a><br>
        <a class="size-hubungi" href="https://www.instagram.com/pt.pancapilarhutama" target="_blank" style="color: #ffffff;"><i class="icon fab fa-instagram"></i> @pt.pancapilarhutama</a><br>
        <a class="size-hubungi" href="mailto:pancapilarhutama@gmail.com" style="color: #ffffff;"><i class="icon far fa-envelope"></i> pancapilarhutama@gmail.com</a><br>
        <a class="size-hubungi" href="mailto:papilhut@pancapilarhutama.co.id" style="color: #ffffff;"><i class="icon far fa-envelope"></i> papilhut@pancapilarhutama.co.id</a><br>
        <a class="size-hubungi" href="https://www.tiktok.com/@pancapilarhutama" target="_blank" style="color: #ffffff;"><i class="icon fab fa-tiktok"></i> @pancapilarhutama</a><br>
        <a class="size-hubungi" href="http://www.pancapilarhutama.co.id" target="_blank" style="color: #ffffff;"><i class="icon fas fa-globe"></i> www.pancapilarhutama.co.id</a><br>
        <a class="size-hubungi" href="https://wa.me/6281527714498" target="_blank" style="color: #ffffff;"><i class="icon fab fa-whatsapp"></i> +62 815 2771 4498</a><br>
        <a class="size-hubungi" href="tel:+62822123456789" style="color: #ffffff;"><i class="icon fas fa-phone"></i> 031-99720617</a>
    </p>
    
      

    </div>
  </footer>

  <div class="copyright">
    &copy; <script>document.write(new Date().getFullYear())</script> PT. Panca Pilar Hutama. All right reserved
  </div>
</body>
</html>
