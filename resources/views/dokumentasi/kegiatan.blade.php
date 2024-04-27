@extends('layouts.navbar')

@section('content')
<div class="container">
    <style>
        /* Styling for the square image container */
        .square-img-container {
            position: relative;
            width: 100%;
            padding-top: 100%; /* 1:1 Aspect Ratio (square) */
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            cursor: pointer; /* Pointer cursor for clickable effect */
        }
        
        .square-img-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Full size image container */
        .square-img-container.full-size {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80vw; /* Adjusted width for full-size image */
            max-width: 50%; /* Limit maximum width */
            max-height: 50%; /* Limit maximum height */
            z-index: 1000;
            cursor: zoom-out;
        }

        .square-img-container.full-size img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            backdrop-filter: blur(8px); /* Apply blur effect only in full-size mode */
        }

        /* Overlay for blur effect */
        .image-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent black background */
            z-index: 100%; /* Ensure overlay is behind full-size image */
            display: none;
            cursor: zoom-out; /* Ubah cursor saat overlay aktif */
        }

        /* Styling untuk teks "Zoom Out" di atas overlay */
        .image-overlay::after {
            content: "Zoom Out"; /* Tambahkan teks "Zoom Out" */
            position: absolute;
            top: 40%;
            left: 40%;
            transform: translate(-40%, -40%);
            color: white;
            font-size: 24px;
            font-weight: bold;
            cursor: pointer;
        }
    
        .image-overlay img {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Center the image within the overlay */
            max-width: 80%; /* Limit max width to avoid overflowing the viewport */
            max-height: 80%; /* Limit max height to avoid overflowing the viewport */
            object-fit: contain; /* Contain image within the overlay area */
        }
    
        /* Custom styles for filter dropdown */
        .filter-dropdown {
            position: relative;
            display: inline-block;
        }
        
        .filter-dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .filter-dropdown-content a {
            color: black;
            padding: 12px 16px;
            display: block;
            text-align: left;
        }

        .filter-dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .active-category {
            background-color: #00A9FF;
            color: white;
        }

        h1.title {
            color: #00A9FF; /* Set title color to dark grey */
            font-weight: bold; /* Make the title bold */
            font-size: 34px; /* Set title font size */
            margin-bottom: 10px;
            margin-top: 10px;/* Add space below the title */
        }

        /* Fixing image height for uniformity */
        .col-md-4 .card {
            height: 100%;
        }

        /* Additional styling for desktop filter buttons */
        .d-none.d-md-flex .btn-secondary {
            margin-right: 10px; /* Add some right margin */
            background-color: #007bff; /* Change background color to blue */
        }

        /* Styling for category text */
        .category-text {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 text-center"> <!-- Menambahkan kelas 'text-center' untuk memposisikan judul di tengah -->
            <h1 class="title">Dokumentasi Kegiatan  @if(isset($category))
                {{-- Mengganti kategori teknis menjadi String biasa --}}
                <div class="category-text">Kategori: {{ ucwords(str_replace('_', ' ', str_replace(['sdm_training', 'production'], ['Pelatihan Sumber Daya Manusia', 'Tenaga Produksi'], $category))) }}</div>

            @endif</h1>
           
            <!-- Tombol Filter -->
            <div class="filter-dropdown mb-3">
                <!-- Tombol filter pada tampilan desktop -->
                <div class="d-none d-md-flex"> <!-- Tampilan hanya di desktop -->
                    <a href="{{ route('dokumentasi.kebersihan') }}" class="btn btn-secondary me-2">Semua</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'cleaning_service']) }}" class="btn btn-secondary me-2">Cleaning Service</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'security']) }}" class="btn btn-secondary me-2">Security</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'sdm_training']) }}" class="btn btn-secondary me-2">Pelatihan SDM</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'engineering']) }}" class="btn btn-secondary me-2">Engineering</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'production']) }}" class="btn btn-secondary me-2">Produksi</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'backoffice']) }}" class="btn btn-secondary me-2">Backoffice</a>
                </div>
                <!-- Dropdown filter pada tampilan perangkat seluler -->
                <div class="d-md-none"> <!-- Tampilan hanya di perangkat seluler -->
                    <button class="btn btn-primary dropdown-toggle" onclick="toggleFilterDropdown()" aria-expanded="false">
                        Filter Kegiatan
                    </button>
                    <div id="filterDropdownContent" class="filter-dropdown-content">
                        <a href="{{ route('dokumentasi.kegiatan') }}">Semua</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'cleaning_service']) }}">Cleaning Serv ice</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'security']) }}">Security</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'sdm_training']) }}">Pelatihan SDM</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'engineering']) }}">Engineering</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'production']) }}">Produksi</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'backoffice']) }}">Backoffice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if ($documentations->isEmpty())
            <div class="col-md-12">
                <p>Dokumentasi masih belum diunggah.</p>
            </div>
        @else
            @foreach ($documentations as $documentation)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="square-img-container">
                            <img src="{{ asset('storage/' . $documentation->image_path) }}" alt="{{ $documentation->title }}" class="card-img-top img-fluid">
                            <div class="overlay"></div> <!-- overlay blur ketika melihat foto -->
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $documentation->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="image-overlay"></div>
</div>



<script>
    function toggleFilterDropdown() {
        var dropdownContent = document.getElementById('filterDropdownContent');
        dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
    }

    document.addEventListener('DOMContentLoaded', function() {
        const images = document.querySelectorAll('.square-img-container');

        images.forEach(image => {
            image.addEventListener('click', function() {
                const fullSizeContainer = this.classList.contains('full-size');

                if (!fullSizeContainer) {
                    // Jika tidak dalam mode full-size, toggle full-size class
                    this.classList.add('full-size');
                    document.querySelector('.image-overlay').style.display = 'block'; // Tampilkan overlay
                } else {
                    // Jika dalam mode full-size, hilangkan class full-size dan sembunyikan overlay
                    this.classList.remove('full-size');
                    document.querySelector('.image-overlay').style.display = 'none'; // Sembunyikan overlay
                }
            });
        });

        // Event listener untuk menutup full-size image saat overlay diklik
        document.querySelector('.image-overlay').addEventListener('click', function() {
            document.querySelector('.square-img-container.full-size').classList.remove('full-size');
            this.style.display = 'none'; // Sembunyikan overlay
        });
    });
</script>
@include('layouts.footer')
@endsection

@section('scripts')

@endsection
