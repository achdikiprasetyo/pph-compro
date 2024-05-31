<!DOCTYPE html>
<html lang="en">
    <style>

        .faq-section {
            max-width: 85%;
            margin: auto;
            margin-top: 50px;
        }

        .faq-title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .faq-question {
            cursor: pointer;
            padding: 15px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: background-color 0.3s ease-in-out;
           
            font-size: 18px;
            position: relative;
        }



        .faq-answer {
            display: none;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: background-color 0.5s ease-in-out;
            font-size: 16px;
        }

        .faq-section h4::before {
            content: "\2022"; /* Bullet point */
            color: #007bff; /* Blue color */
            display: inline-block;
            margin-right: 10px;
        }

        .faq-section .close-popup {
            font-weight: normal;
            cursor: pointer;
        }

        .faq-question.opened {
            background-color: #007bff;
            color: #fff;
        }

        .faq-question.opened:hover {
            background-color: #007bff; /* Keep the color when hovering */
        }

        .faq-question:not(.opened):hover,
        .faq-answer:hover {
            background-color: #e9ecef;
        }

        /* Adjusted animation duration */
        .faq-answer {
            transition: background-color 0.7s ease-in-out;
        }

        @media (max-width: 768px) {
        .faq-question {
            cursor: pointer;
            padding: 11px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: background-color 0.3s ease-in-out;
         
            font-size: 14px;
            position: relative;
        }

        .faq-answer {
            display: none;
            padding: 15px;
            background-color: #fff;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            margin-bottom: 15px;
            transition: background-color 0.5s ease-in-out;
            font-size: 14px;
        }
        }
    </style>
</head>
<body>

    <!-- FAQ Section -->
    <div class="faq-section animated-element" data-animation="fadeIn">
        <div class="faq-title animated-element" data-animation="fadeIn">FAQ</div>
        <div class="faq-question animated-element" data-animation="fadeIn" data-toggle="collapse" data-target="#faq1">
            <p>Apa saja layanan pelatihan yang disediakan oleh perusahaan ini?</p>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>PT. Panca Pilar Hutama melayani berbagai pelatihan dan jasa menyesuaikan kebutuhan perusahaan anda.</p>
        </div>

        <div class="faq-question" data-toggle="collapse" data-target="#faq1">
            <p>Bagaimana cara bekerja sama dengan PPH?</p>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>Untuk bekerja sama dengan perusahaan kami, anda bisa melihat terlebih dahulu Portofolio PT. Panca Pilar Hutama yang sudah ada diwebsite, kemudian jika anda tertarik untuk bekerja sama dengan perusahaan kami, anda bisa hubungi kami melalui kontak yang tertera diwebsite</p>
        </div>
        <div class="faq-question" data-toggle="collapse" data-target="#faq1">
            <p>Jika ingin melamar apakah dikenakan biaya?</p>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>Semua pendaftaran di PT. Panca Pilar Hutama tidak dipungut biaya apapun, jika ada oknum yang meminta biaya administrasi, laporkan kepada kami melalui kontak yang telah ditampilkan diwebsite.</p>
        </div>
        <div class="faq-question" data-toggle="collapse" data-target="#faq1">
            <p>Bagaimana cara melamar di PPH?</p>
        </div>
        <div id="faq1" class="faq-answer collapse">
            <p>Untuk melamar di PPH, anda harus mendaftar terlebih dahulu melalui form, kemudian jika lolos administrasi anda akan di hubungi untuk lanjut ke proses interview</p>
        </div>
       

    </div>
    <br><br>

    <script>

        // FAQ Animation
        document.querySelectorAll('.faq-question').forEach(function (question) {
            question.addEventListener('click', function () {
                var answer = this.nextElementSibling;
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    question.classList.remove('opened');
                } else {
                    answer.style.display = 'block';
                    question.classList.add('opened');
                }
            });
        });
    </script>
</body>
</html>


@section('faq-animation')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection