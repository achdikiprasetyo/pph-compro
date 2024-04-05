@extends('layouts.footer')
@extends('layouts.navbar')

<style>



    @media (min-width: 768px) {
        /* Aturan CSS untuk layar desktop */
        .img-fluid {
            max-width: 80%;
            float: left;
            margin-right: 20px;
        }

        .description {
            overflow: hidden;
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
            margin-bottom: 10px;
            margin /* Add space below the title */
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



@section('content')

<div class="container-jasa">
    <div class="left-container">
        <h1 class="title animated-element">Operator Parkir</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                Dengan layanan operator parkir yang telah kami sediakan, anda tidak perlu repot memikirkan tempat parkir di perusahaan anda, karena kami memiliki tenaga yang sudah ahli dan dapat meningkatkan efisiensi dalam proses parkir kendaraan di perusahaan anda.
            </p>
            <p class="description">
                Layanan tenaga Operator Parkir kami tidak hanya menawarkan lahan parkir yang terorganisir dengan baik, kami juga akan memberikan pengalaman yang memastikan keamanan dan kenyamanan orang yang ingin memarkirkan kendaraanya.
            </p>


        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/operatorParkir.png')}}" alt="Gambar">
    </div>
</div>



@endsection
