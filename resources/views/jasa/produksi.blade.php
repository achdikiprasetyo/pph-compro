@extends('layouts.footer')
@extends('layouts.navbar')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>


        .container-wrapper {
            display: flex;
            justify-content: center; /* Center align the flex container */
            flex-wrap: wrap; /* Enable wrapping for smaller screens */
        }

        .container-box {
            max-width: 400px;
            margin: 20px;
            float: none; /* Reset float */
            overflow: hidden;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            transition: transform 0.3s ease; /* Add transition effect */
        }

        .list-item {
            width: 100%;
            overflow: hidden;
            border-radius: 10px;
        }

        .list-item img {
            width: 100%;
            height: auto;
            display: block;
            border-radius: 10px 10px 0 0;
        }

        .text-content {
            padding: 15px;
            background-color: #fff;
        }

        .service-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .service-description {
            font-size: 14px;
            color: #666;
        }

        .container-box:hover {
            transform: scale(1.05);
        }

        @media only screen and (max-width: 600px) {
            .container-box {
                max-width: 100%;
            }
        }
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
    </style>


</head>
<body>
    <div class="container-jasa animated-element">
        <div class="left-container">
            <h1 class="title">Jasa Tenaga Produksi</h1>
            <p class="description">
                
                Jika perusahaan Anda membutuhkan pasokan tenaga produksi yang handal dan efisien, kami siap menyediakan jasa tenaga produksi yang berkualitas tinggi dan terpercaya. Dengan tim yang terlatih dan berpengalaman, kami akan menjadi mitra yang dapat diandalkan untuk memenuhi kebutuhan produksi perusahaan Anda.
            <p class="description">
                Kami memastikan setiap tenaga produksi yang kami sediakan telah melewati seleksi ketat dan telah memiliki keterampilan yang sesuai dengan kebutuhan perusahaan Anda. Kolaborasi dengan kami bukan hanya tentang memperoleh tenaga kerja, tetapi juga tentang mendapatkan solusi yang tepat untuk meningkatkan efisiensi dan produktivitas dalam operasi produksi Anda.
        </div>
        <div class="right-container">
            <img src="{{asset('image/jasa/produksiLandscape.png')}}" alt="Gambar">
        </div>
    </div>


    

</body>
</html>

@endsection
