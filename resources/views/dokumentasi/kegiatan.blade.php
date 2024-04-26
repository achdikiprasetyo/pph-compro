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
        }
    
        .square-img-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
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
        </style>
    <div class="row justify-content-center mb-3">
        <div class="col-md-8 text-center"> <!-- Menambahkan kelas 'text-center' untuk memposisikan judul di tengah -->
            <h1 class="title">Dokumentasi Kegiatan</h1>
            <!-- Button group for categories (using Bootstrap) -->
            <div class="filter-dropdown mb-3">
                <!-- Tombol filter pada tampilan desktop -->
                <div class="d-none d-md-flex"> <!-- Tampilan hanya di desktop -->
                    <a href="{{ route('dokumentasi.kebersihan') }}" class="btn btn-secondary me-2">All</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'cleaning_service']) }}" class="btn btn-secondary me-2">Cleaning Service</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'security']) }}" class="btn btn-secondary me-2">Security</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'sdm_training']) }}" class="btn btn-secondary me-2">SDM Training</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'engineering']) }}" class="btn btn-secondary me-2">Engineering</a>
                    <a href="{{ route('dokumentasi.kebersihan', ['category' => 'production']) }}" class="btn btn-secondary me-2">Production</a>
                </div>
                <!-- Dropdown filter pada tampilan perangkat seluler -->
                <div class="d-md-none"> <!-- Tampilan hanya di perangkat seluler -->
                    <button class="btn btn-primary dropdown-toggle" onclick="toggleFilterDropdown()" aria-expanded="false">
                        Filter Kegiatan
                    </button>
                    <div id="filterDropdownContent" class="filter-dropdown-content">
                        <a href="{{ route('dokumentasi.kegiatan') }}">All</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'cleaning_service']) }}">Cleaning Service</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'security']) }}">Security</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'sdm_training']) }}">SDM Training</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'engineering']) }}">Engineering</a>
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'production']) }}">Production</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if ($documentations->isEmpty())
            <div class="col-md-12">
                <p>Dokumentasi Masih belum di Upload.</p>
            </div>
        @else
            @foreach ($documentations as $documentation)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <!-- foto dengan rasio 1:1 -->
                        <div class="square-img-container">
                            <img src="{{ asset('storage/' . $documentation->image_path) }}" alt="{{ $documentation->title }}" class="card-img-top img-fluid">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $documentation->title }}</h5>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<script>
    function toggleFilterDropdown() {
        var dropdownContent = document.getElementById('filterDropdownContent');
        dropdownContent.style.display = (dropdownContent.style.display === 'block') ? 'none' : 'block';
    }
</script>
@include('layouts.footer')
@endsection

@section('scripts')

@endsection
