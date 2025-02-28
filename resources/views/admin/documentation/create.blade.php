@extends('layouts.admin') 

@section('content')
    <div class="container">
        <h2>Upload Dokumentasi Baru</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('admin.documentation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Nama Kegiatan</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">Foto Kegiatan</label>
                <input type="file" name="image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="category">Kategori</label>
                <select name="category" class="form-control" required>
                    <option value="cleaning_service">Cleaning Service</option>
                    <option value="security">Security</option>
                    <option value="sdm_training">Pelatihan Sumber Daya Manusia</option>
                    <option value="engineering">Engineering</option>
                    <option value="production">Tenaga Produksi</option>
                    <option value="backoffice">Staff Kantor Backoffice</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Upload Dokumentasi</button>
        </form>
    </div>
@endsection
