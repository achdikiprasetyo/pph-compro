@include('layouts.navbar')

</html>


<!-- resources/views/layouts/main.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>

    <!-- Add your styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            opacity: 0; /* Set initial opacity to 0 */
            transition: opacity 0.5s ease-in-out; /* Add opacity transition */
            overflow-x: hidden; /* Hide horizontal scrollbar during animation */
        }

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
    </style>
</head>
<body class="page-loaded">
    
    <!-- Your existing HTML content goes here -->
    <div class="contact-container">
        <h1>Kontak Kami</h1>
        <p>Silakan hubungi kami melalui media sosial di bawah:</p>
       <!-- ... (bagian HTML lainnya) ... -->

<ul class="social-icons">
    <!-- Ganti URL sesuai dengan akun sosial media Anda -->
    <li><a href="https://www.instagram.com/pt.pancapilarhutama/" target="_blank"><i class="fab fa-instagram"></i></a></li>
    <li><a href="mailto:pancapilarhutama@gmail.com" target="_blank"><i class="far fa-envelope"></i></a></li>
    <li><a href="https://www.facebook.com/PancaPilarHutama/" target="_blank"><i class="fab fa-facebook"></i></a></li>
    <li><a href="http://wa.me/6282247424826" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
    <li><a href="https://www.tiktok.com/@pancapilarhutama" target="_blank"><i class="fab fa-tiktok"></i></a></li>
</ul>

<!-- ... (bagian HTML lainnya) ... -->

        <p class="address">Alamat kami: Perumahan Kahuripan Nirwana Village Blok BA2 No.1, Sumput, Kec. Sidoarjo, Jawa Timur</p>

        <!-- Responsif Google Map Embed -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15825.021609774825!2d112.6823147578092!3d-7.436966781181425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e107f13ec4d7%3A0xb34aa8eb07cbee3d!2sPT.%20PANCA%20PILAR%20HUTAMA!5e0!3m2!1sid!2sid!4v1708068659733!5m2!1sid!2sid" 
                width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

    @include('layouts.footer')



    <script>
        // Add an animation class to elements you want to animate
        document.addEventListener("DOMContentLoaded", function () {
            animateElements(".social-icons li", "animate");
        });

        function animateElements(selector, animation) {
            const elements = document.querySelectorAll(selector);
            elements.forEach((element, index) => {
                element.style.transitionDelay = `${index * 0.2}s`;
                element.classList.add(animation);
            });
        }
    </script>
</body>
</html>
