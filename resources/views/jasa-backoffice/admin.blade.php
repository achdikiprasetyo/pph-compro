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

<div class="container-jasa ">
    <div class="left-container">
        <h1 class="title animated-element">Tenaga Admin</h1>
        <div class="row animated-element" data-animation="fadeIn">
            <div class="col-md-12">
            <p class="description">
                
                Tim admin kami tidak hanya terampil dalam mengerjakan tugas rutin melainkan juga memegang prinsio efisiensi serta kemudahan sebagai landasan pelayanan. Dengan keahlian tenaga admin, kami berkomitment terhadap profesionalisme, dan tenaga yang memahami bahwa tenaga admin memiliki peran penting dalam mencapai keberhasilan
            </p>
            <p class="description">
                Dengan keahlian, kreativitas, keandalan dan layanan yang baik, tenaga admin kami juga berusaha untuk mengembangkan perusahaan anda.
            </p>


        </div>
    </div>
</div>
    <div class="right-container animated-element">
        <img src="{{asset('image/backoffice/tenagaAdmin.png')}}" alt="Gambar">
    </div>
</div>



@endsection
