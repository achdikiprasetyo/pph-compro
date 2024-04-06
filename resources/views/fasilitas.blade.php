
@extends('layouts.footer')
@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Responsive</title>
    <style>

        .container-jasa {
            display: flex;
            flex-wrap: wrap;
        }

        .left-container {
            flex: 1;
            padding: 20px;

        }

        .right-container {
            flex: 1;
            margin-top: 20px;
            overflow: hidden; /* Mencegah gambar keluar dari container */
  
        }

        img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 8px; /* Add border-radius to the image */
        }

        h1.title {
            color: #00A9FF; /* Set title color to dark grey */
            font-weight: bold; /* Make the title bold */
            font-size: 28px; /* Set title font size */
            margin-bottom: 10px; /* Add space below the title */
        }

        h2.subtitle {
            color: #000000; /* Set subtitle color to blue */
            font-size: 20px; /* Set subtitle font size */
            font-weight: normal; /* Remove bold from subtitle */
            margin-top: 0; /* Remove default top margin */
        }

        @media (max-width: 768px) {
            .container-jasa {
                flex-direction: column;
            }
        }

        .right-container img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
            transition: transform 0.3s ease-in-out;
        }
        .right-container img:hover {
            transform: scale(1.1);
        }


    </style>
     <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
</head>
<body>
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
        <div class="right-container animated-element">
            <img src="{{asset('image/fasilitas/absensiOnline.png')}}" alt="Gambar">
        </div>
    </div>

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
        <div class="right-container">
            <img src="{{asset('image/fasilitas/qrPatrol.png')}}" alt="Gambar">
        </div>
    </div>

</body>
</html>
@endsection
