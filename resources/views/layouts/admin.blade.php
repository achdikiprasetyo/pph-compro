<!-- resources/views/layouts/admin.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Tambahkan Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- Head content -->
    <title>Admin Panel</title>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            CKEDITOR.replace('content');
        });
    </script>

    <style>
        /* Custom styles for navbar */
        .navbar {
            background-color: #3498db; /* Warna latar belakang navbar */
        }

        .navbar-brand {
            color: #ffffff !important; /* Warna teks navbar */
        }

        .navbar-nav .nav-item {
            margin-right: 15px; /* Jarak antar item navbar */
        }

        .navbar-nav .nav-item a {
            color: #ffffff !important; /* Warna teks item navbar */
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light ">
        <a class="navbar-brand" href="{{ route('admin.index') }}">
            <img src="{{asset('image/logo.png')}}" alt="Logo" width="30" height="30" class="d-inline-block align-top">
            Dashboard
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.index') }}">Artikel</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin.documentation.index') }}">Dokumentasi</a>
                </li>
                <!-- Tambahkan item menu lainnya sesuai kebutuhan -->
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Tambahkan Bootstrap JS dan Popper.js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
