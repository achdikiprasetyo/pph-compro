@include('layouts.info')
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PT. Panca Pilar Hutama</title>
   <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/png">
   <!-- Tambahkan link Bootstrap CSS di sini -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.css"
      integrity="sha512-kMPqFnKueEwgQFzXLEEl671aHhQqrZLS5IP3HzqdfozaST/EgU+/wkM07JCmXFAt9GO810I//8DBonsJUzGQsQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

   <!-- Tambahkan gaya khusus untuk navbar -->
   <style>

   body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
 
             background: url('{{asset('image/background.png')}}') fixed; /* Set background image and make it fixed */
            background-size: cover; 
        }
      .navbar-custom {
         background-color: #00A9FF;
      }

      .navbar-brand {
         font-family: 'Poppins', sans-serif;
         font-weight: 600; /* Semi-bold */
         font-size: 15px;
      }

      .navbar-brand img {
         height: 30px; /* Adjust the height based on the aspect ratio */
         width: auto; /* Maintain the aspect ratio */
      }

      .navbar-nav .nav-link {
         font-family: 'Poppins', sans-serif;
         font-weight: 600; /* Semi-bold */
         font-size: 15px;
      }

      .penawaran {
         position: relative;
         background-image: url({{ asset('image/tawaranKerjaSama.jpg') }});
         background-size: cover;
         background-position: center;
         padding-bottom:450px;
         padding-top:220px;
         text-align: left;
   
      }

      /* Tambahkan gaya untuk bagian bawah navbar */
      .bottom-section {
         position: relative;
         background-image: url({{ asset('image/slider/slider1.jpg') }});
         background-size: cover;
         background-position: center;
         padding-bottom:450px;
         padding-top:220px;
         text-align: left;
   
      }

      .bottom-section-2 {
         position: relative;
         background-image: url({{ asset('image/slider/slider2.jpg') }});
         background-size: cover;
         background-position: center;
         padding-bottom:450px;
         padding-top:220px;
         text-align: left;
   
      }

      .bottom-section-3 {
         position: relative;
         background-image: url({{ asset('image/slider/slider3.jpg') }});
         background-size: cover;
         background-position: center;
         padding-bottom:450px;
         padding-top:220px;
         text-align: left;
   
      }

      .bottom-section-4 {
         position: relative;
         background-image: url({{ asset('image/slider/slider5.jpg') }});
         background-size: cover;
         background-position: center;
         padding-bottom:450px;
         padding-top:220px;
         text-align: left;
   
      }

      .logo-wrapper {
         display: flex;
         align-items: center;
         font-size: 18px;
      }

      .logo-wrapper img {
         margin-right: 10px; 
      }


      .bottom-section-5 {
         position: relative;
         background-image: url({{ asset('image/slider/5.jpg') }});
         background-size: cover;
         background-position: center;
         padding-bottom:450px;
         padding-top:220px;
         text-align: left;
   
      }

      .bottom-section-6 {
         position: relative;
         background-image: url({{ asset('image/slider/6.png') }});
         background-size: cover;
         background-position: center;
         padding-bottom:450px;
         padding-top:220px;
         text-align: left;
   
      }

      .bottom-section::before {
         content: "";
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         background-color: rgba(0, 0, 0, 0); /* Ubah nilai alpha untuk kegelapan yang diinginkan */
      }

      .slogan {
         font-size: 32px;
         font-weight: 600;
         color: #00A9FF;
         font-family: 'Poppins', sans-serif;
      }
      .slogan-tawar {
         font-size: 32px;
         font-weight: 600;
         color: #ffffff;
         font-family: 'Poppins', sans-serif;
      }

      .isi-slogan {
         font-size: 18px;
         font-weight: 600;
         color: black;
         font-family: 'Poppins', sans-serif;
      }

      .btn-custom {
         background-color: #00A9FF;
         color: white;
      }

      .btn-custom-tawar {
         background-color: #003242;
         color: white;
      }

      /* Tambahkan gaya untuk submenu */
      .dropdown-menu {
         background-color: #00A9FF;
      }

      .dropdown-item {
         color: white;
      }

      .dropdown-item:hover {
         background-color: #007BFF;
      }

      .animated-element {
      opacity: 0%;
      transform: translateY(20px);
      transition: opacity 1s ease-out, transform 1s ease-out;
    }

    .animated-element.animated {
      opacity: 1;
      transform: translateY(0);
    }

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

        .separator {
            width: 100%;
            text-align: center;
            margin: 20px 0;
            font-size: 18px;
            color: #555;
            font-weight: bold; /* Tambahkan tebal pada teks */
            position: relative;
         }
         .container-box {
               position: relative;
               overflow: hidden;
               border-radius: 8px;
            }

    .container-box img {
        width: 100%;
        height: auto;
        transition: transform 0.3s, filter 0.3s; /* Add transition for smooth effect */
    }

    .container-box:hover img {
        transform: scale(1.1); /* Enlarge the image on hover */
        filter: brightness(70%); /* Darken the image on hover */
    }

    .read-more-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 10px 20px;
        background-color: #00A9FF;
        color: #fff;
     
        border-radius: 5px;
        opacity: 0;
        
        transition: opacity 0.3s;
    }
    .read-more-button:hover {
        text-decoration: none; /* Remove underline on hover */
    }

    .container-box:hover .read-more-button {
        opacity: 1; /* Show the button on hover */
    }

   /* Halaman Karir */
   .google-form-container {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 800px;
        margin-bottom: 20px; 
    }
    .google-form-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Halaman Kontak */
    .page-loaded {
            opacity: 1; /* Change opacity to 1 when the page is loaded */
        }

        /* Your existing styles go here */

        .contact-container {
            max-width: 100%;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            animation: slideInFromLeft 1s ease-in-out; /* Add slide-in animation */
        }

        /* Define slideInFromLeft animation */
        @keyframes slideInFromLeft {
            from {
                opacity: 0;
                transform: translateX(-100%);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .social-icons li {
            display: inline-block;
            margin: 15px;
            opacity: 0; /* Set initial opacity to 0 */
            transition: opacity 0.5s ease-in-out; /* Add opacity transition */
        }

        .social-icons li.animate {
            opacity: 1; /* Change opacity to 1 for animated elements */
        }

        .contact-container {
            max-width: 100%;
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
        }
        .contact-container h1 {
            color: #333;
        }
        .social-icons {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
        }
        .social-icons li {
            display: inline-block;
            margin: 15px;
        }
        .social-icons li a {
            text-decoration: none;
            color: #333;
            font-size: 24px;
            transition: color 0.3s ease-in-out;
        }
        .social-icons li a:hover {
            color: #007bff;
        }
        .address {
            margin-top: 20px;
            color: #555;
        }
        #map {
            width: 100%; /* Menggunakan 100% width agar responsif */
            height: 400px; /* Sesuaikan tinggi peta sesuai kebutuhan */
            border-radius: 10px;
        }


        /* Halaman About */
        
   </style>





<script>
   document.addEventListener("DOMContentLoaded", function () {
     const options = {
       threshold: 0.1,
     };
 
     const handleIntersection = (entries, observer) => {
       entries.forEach((entry) => {
         if (entry.isIntersecting) {
           entry.target.classList.add("animated");
           observer.unobserve(entry.target);
         }
       });
     };
 
     const observer = new IntersectionObserver(handleIntersection, options);
     const animatedElements = document.querySelectorAll(".animated-element");
 
     animatedElements.forEach((element) => {
       observer.observe(element);
     });
   });
 </script>
   <!-- Tambahkan link untuk font Poppins -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap">
   @yield('page-css')
</head>
<body>
   

   <nav class="navbar navbar-expand-lg navbar-dark navbar-custom ">
      <a class="navbar-brand animated-element" data-animation="fadeIn" href="#">
         <div class="logo-wrapper">
            <img src="{{ asset('image/logo.png') }}" alt="Logo" class="d-inline-block align-top animated-element" data-animation="fadeIn">
            PT. Panca Pilar Hutama
         </div>
      </a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="{{route('home')}}">Beranda</a>
            </li>
            <li class="nav-item active ">
               <a class="nav-link" href="{{route('about')}}">Tentang Kami</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link" href="{{route('articles.index')}}">Artikel</a>
            </li>
            <li class="nav-item active dropdown">
               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
               </a>
               <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{route('jasa.kebersihan')}}">Jasa Kebersihan</a>
                  <a class="dropdown-item" href="{{route('jasa.keamanan')}}">Jasa Keamanan</a>
                  <a class="dropdown-item" href="{{route('jasa.backoffice')}}">Jasa Back Office</a>
                  <a class="dropdown-item" href="{{route('jasa.pelatihan')}}">Jasa Pelatihan</a>
                  <a class="dropdown-item" href="{{route('jasa.sdm')}}">Jasa Sumber Daya Manusia</a>
                  <a class="dropdown-item" href="{{route('jasa.engineer')}}">Jasa Engineer</a>
                  <a class="dropdown-item" href="{{route('jasa.produksi')}}">Jasa Tenaga Produksi</a>

               </div>
            </li>
            <li class="nav-item active">
               <a class="nav-link" href="{{route('kontak')}}">Kontak</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link" href="{{route('fasilitas')}}">Fasilitas</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link" href="{{route('karir')}}">Karir</a>
            </li>
            <li class="nav-item active">
               <a class="nav-link" href="{{route('dokumentasi.kegiatan')}}">Dokumentasi</a>
            </li>
         </ul>
      </div>
   </nav>


        @yield('content')
   

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   

</body>
</html>
