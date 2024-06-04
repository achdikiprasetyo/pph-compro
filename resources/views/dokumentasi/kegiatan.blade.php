@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{asset('css/listDokumentasi.css')}}">
@endsection

@section('content')
<div class="container">
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
                    <a href="{{ route('dokumentasi.kegiatan') }}" class="btn btn-secondary me-2">Semua</a>
                    <a href="{{ route('dokumentasi.kegiatan', ['category' => 'cleaning_service']) }}" class="btn btn-secondary me-2">Cleaning Service</a>
                    <a href="{{ route('dokumentasi.kegiatan', ['category' => 'security']) }}" class="btn btn-secondary me-2">Security</a>
                    <a href="{{ route('dokumentasi.kegiatan', ['category' => 'sdm_training']) }}" class="btn btn-secondary me-2">Pelatihan SDM</a>
                    <a href="{{ route('dokumentasi.kegiatan', ['category' => 'engineering']) }}" class="btn btn-secondary me-2">Engineering</a>
                    <a href="{{ route('dokumentasi.kegiatan', ['category' => 'production']) }}" class="btn btn-secondary me-2">Produksi</a>
                    <a href="{{ route('dokumentasi.kegiatan', ['category' => 'backoffice']) }}" class="btn btn-secondary me-2">Backoffice</a>
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
                        <a href="{{ route('dokumentasi.kegiatan', ['category' => 'backoffice']) }}">Backffice</a>
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




@include('layouts.footer')
@endsection

@section('scripts')

@endsection
