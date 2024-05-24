@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endsection

@section('content')
    <body class="page-loaded">
        <div class="contact-container">
                <h1>Kontak Kami</h1>
                <p>Silahkan hubungi kami melalui media sosial di bawah</p>
                
        <ul class="social-icons">
            <!-- URL Sosial Media -->
            <li><a href="https://www.instagram.com/pt.pancapilarhutama/" target="_blank"><i class="fab fa-instagram"></i></a></li>
            <li><a href="mailto:pancapilarhutama@gmail.com" target="_blank"><i class="far fa-envelope"></i></a></li>
            <li><a href="https://www.facebook.com/PancaPilarHutama/" target="_blank"><i class="fab fa-facebook"></i></a></li>
            <li><a href="http://wa.me/6281527714498" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
            <li><a href="https://www.tiktok.com/@pancapilarhutama" target="_blank"><i class="fab fa-tiktok"></i></a></li>
        </ul>
        
            <!-- ... IFRAME LOKASI GOOGLE MAPS ... -->
            <p class="address">Alamat kami: Perumahan Kahuripan Nirwana Village Blok BA2 No.1, Sumput, Kec. Sidoarjo, Jawa Timur</p>

            <!-- EMBED GOOGLE MAP -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15825.021609774825!2d112.6823147578092!3d-7.436966781181425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e107f13ec4d7%3A0xb34aa8eb07cbee3d!2sPT.%20PANCA%20PILAR%20HUTAMA!5e0!3m2!1sid!2sid!4v1708068659733!5m2!1sid!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    {{-- script dan animation --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>

    <script>
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
    @include('layouts.footer')
@endsection
