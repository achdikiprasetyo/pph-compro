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
            <h1 class="title">Jasa Sumber Daya Manusia</h1>
            <p class="description">
                
                Di layanan pelatihan Sumber Daya Manusia, kami mengajak anda untuk menjadikan mitra untuk mengoptimalkan SDM yang ada di perusahaan anda. Kami tidak hanya memnawarkan jasa pelatihan yang standar, melainkan kami juga melayani kebutuhan oelatihan perusahaan anda yang lainnya.
            <p class="description">
                Layanan kami dirancang untuk memberikan jasa pelatihan yang telah disesuaikan untuk kebutuhan perusahaan anda. Dengan pendekatan yang praktis dan mudah dimengerti, kami akan membantu perusahaan anda untuk meningkatkan keterampilan, motivasi dan produktivitas tim.
        </div>
        <div class="right-container">
            <img src="{{asset('image/jasa/jasaSdm.png')}}" alt="Gambar">
        </div>
    </div>

</body>
</html>
@endsection
