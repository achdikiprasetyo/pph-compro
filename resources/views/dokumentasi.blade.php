<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Our Services</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .service-section {
            max-width: 90%;
            margin: auto;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-bottom: 20px;
        }
        .service-section h2 {
            color: #333;
        }
        .service-description {
            margin-top: 20px;
            color: #555;
        }
        .service-photos {
            margin-top: 20px;
        }
        .service-photos img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
        }
        .service-photos img:hover {
            transform: scale(1.1);
        }


    </style>
</head>
<body>

    @include('layouts.navbar')

    <!-- Jasa Kebersihan Section -->
    <div class="service-section animated-element" data-animation="fadeIn">
        <h2>Jasa Kebersihan</h2>
        <p class="service-description">Jasa Kebersihan kami memberikan solusi profesional untuk membersihkan dan merawat kebersihan
            lingkungan Anda. Dengan tim terlatih dan peralatan modern, kami siap membantu menjaga kebersihan
            tempat Anda. Berikut adalah beberapa  foto dari layanan kebersihan kami:</p>
        <div class="service-photos row">
            <div class="col-md-4">
                <img src="image/kebersihan_1.jpg" alt="Pelatihan 1">
            </div>
            <div class="col-md-4">
                <img src="image/kebersihan_2.jpg" alt="Pelatihan 2">
            </div>
            <div class="col-md-4">
                <img src="image/kebersihan_3.jpg" alt="Pelatihan 3">
            </div>
        </div>
    </div>

    <!-- Jasa Keamanan Section -->
    <div class="service-section animated-element" data-animation="fadeIn">
        <h2>Jasa Keamanan</h2>
        <p class="service-description"> Layanan keamanan dapat dipergunakan untuk perumahan, perkantoran, rumah sakit, sekolah, kampus, gedung produksi, Mall, Perbankan, dan perusahaan lainnya yang memerlukan sebuah jasa kemananan untuk menciptakan lingkungan yang terjamin keamanannya. Berikut adalah beberapa  foto dari layanan keamanan kami:</p>
        <div class="service-photos row">
            <div class="col-md-4">
                <img src="image/keamanan_1.jpg" alt="Pelatihan 1">
            </div>
            <div class="col-md-4">
                <img src="image/keamanan_2.jpg" alt="Pelatihan 2">
            </div>
            <div class="col-md-4">
                <img src="image/keamanan_3.jpg" alt="Pelatihan 3">
            </div>
        </div>
    </div>

    <!-- Jasa Pelatihan Section -->
    <div class="service-section animated-element" data-animation="fadeIn">
        <h2>Jasa Pelatihan</h2>
        <p class="service-description">PT. Panca Pilar Hutama menyediakan sebuah jasa Pelatihan Satuan dan Keamanan Gada Pratama, Gada Madya dan Gata Utama. Jasa kami mampu menciptakan pribadi yang berpengetahuan dan memiliki keteranpilan yang diperlukan dalam menjalankan tugas secara efektif dan juga profesional. Berikut adalah beberapa foto dari layanan jasa pelatihan kami:</p>
        <div class="service-photos row">
            <div class="col-md-4">
                <img src="image/pelatihan_1.jpg" alt="Pelatihan 1">
            </div>
            <div class="col-md-4">
                <img src="image/pelatihan_2.jpg" alt="Pelatihan 2">
            </div>
            <div class="col-md-4">
                <img src="image/pelatihan_3.jpg" alt="Pelatihan 3">
            </div>
        </div>
    </div>

    <div class="service-section animated-element" data-animation="fadeIn">
        <h2>Jasa Sumber Daya Manusia</h2>
        <p class="service-description">Pengembangan Sumber Daya Manusia sangatlah penting bagi PT. Panca Pilar Hutama yang telah bergerak dalam bidang penyediaan jasa tenaga kerja.  Berikut adalah beberapa foto dari layanan pelatihan Sumber Daya Manusia kami:</p>
        <div class="service-photos row">
            <div class="col-md-4">
                <img src="image/sdm_1.jpg" alt="Pelatihan 1">
            </div>
            <div class="col-md-4">
                <img src="image/sdm_2.jpg" alt="Pelatihan 2">
            </div>
            <div class="col-md-4">
                <img src="image/sdm_3.jpg" alt="Pelatihan 3">
            </div>
        </div>
    </div>

    <div class="service-section animated-element" data-animation="fadeIn">
        <h2>Jasa Back Office</h2>
        <p class="service-description">Layanan Backoffice yang disediakan oleh perusahaan kami akan berusaha untuk mendukung keberhasilan diperusahaan anda untuk mencapai target yang telah ditentukan. Maka dari itulah diperlukan beberapa tenaga supporting yang dapat membantu proses Pencapaian target Perusahaan. Berikut adalah beberapa foto dari Layanan Backoffice kami :</p>
        <div class="service-photos row">
            <div class="col-md-4">
                <img src="image/backoffice_1.jpg" alt="Pelatihan 1">
            </div>
            <div class="col-md-4">
                <img src="image/backoffice_2.jpg" alt="Pelatihan 2">
            </div>
            <div class="col-md-4">
                <img src="image/backoffice_3.jpg" alt="Pelatihan 3">
            </div>
        </div>
    </div>

    <div class="service-section animated-element" data-animation="fadeIn">
        <h2>Jasa Engineer</h2>
        <p class="service-description">PT. Panca Pilar Hutama menyediakan sebuah pelayanan yang terbaik dalam bidang perawatan dan pemeliharaan Gedung Berikut adalah beberapa foto dari layanan Engineer kami:</p>
        <div class="service-photos row">
            <div class="col-md-4">
                <img src="image/engineer_4.jpg" alt="Pelatihan 1">
            </div>
            <div class="col-md-4">
                <img src="image/engineer_2.jpg" alt="Pelatihan 2">
            </div>
            <div class="col-md-4">
                <img src="image/engineer_3.jpg" alt="Pelatihan 3">
            </div>
        </div>
    </div>

    <div class="service-section animated-element" data-animation="fadeIn">
        <h2>Jasa Outbond</h2>
        <p class="service-description"> Layanan Outbond yang ditawarkan oleh perusahaan kami merupakan sebuah kegiatan diluar ruangan untuk mengembangkan Sumber Daya Manusia dan Kerja Sama Tim dilingkungan perusahaan Anda. Berikut adalah beberapa contoh foto dari jasa Outbond Kami kami:</p>
        <div class="service-photos row">
            <div class="col-md-4">
                <img src="image/outbond_1.jpg" alt="Pelatihan 1">
            </div>
            <div class="col-md-4">
                <img src="image/outbond_2.jpg" alt="Pelatihan 2">
            </div>
            <div class="col-md-4">
                <img src="image/outbond_3.jpg" alt="Pelatihan 3">
            </div>
        </div>
    </div>




    @include('layouts.footer')

</body>
</html>

