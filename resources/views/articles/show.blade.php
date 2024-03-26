@include('layouts.navbar')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tambahkan Bootstrap CSS -->

     <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                CKEDITOR.replace('content');
            });
        </script>
    <style>


        .container {
            margin-top: 20px; /* Margin atas untuk memberikan ruang dari navigasi Bootstrap */
        }

        h1 {
            color: #007bff; /* Warna teks judul */
        }

        .image {
            max-width: 100%; /* Gambar tidak melebihi lebar kontainer */
            height: auto; /* Mempertahankan aspek rasio gambar */
            border-radius: 8px; /* Sudut membulat pada gambar */
            margin-bottom: 20px; /* Margin bawah pada gambar */
        }

        p {
            margin-bottom: 20px; /* Margin bawah pada paragraf */
        }

        .article-date {
            font-style: italic; /* Tulisan miring pada tanggal */
            color: #6c757d; /* Warna teks tanggal */
        }

        a {
            color: #007bff; /* Warna teks link */
        }

        a:hover {
            text-decoration: underline; /* Garis bawah pada link ketika dihover */
        }
    </style>
</head>
<body>

    <div class="container animated-element" data-animation="fadeIn">
        <h1>{{ $article->title }}</h1>
        <p class="article-date">Diposting pada: {{ $article->created_at->format('d F Y') }}</p>
        <img class="image animated-element" data-animation="fadeIn" src="{{ $article->image_url }}" alt="Article Image">
        <div>{!! $article->content !!}</div>
        
        <p><a href="{{ route('articles.index') }}">Kembali ke Daftar Artikel</a></p>
    </div>
    

</body>
</html>

@include('layouts.whatsapp')
@include('layouts.footer')