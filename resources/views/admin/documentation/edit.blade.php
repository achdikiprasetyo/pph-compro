@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Documentation</h2>

        <form action="{{ route('admin.documentation.update', $documentation->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $documentation->title }}" required>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control-file">
                <img src="{{ asset('storage/' . $documentation->image_path) }}" alt="{{ $documentation->title }}" style="max-width: 200px;">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" class="form-control" required>
                    <option value="cleaning_service" {{ $documentation->category === 'cleaning_service' ? 'selected' : '' }}>Cleaning Service</option>
                    <option value="security" {{ $documentation->category === 'security' ? 'selected' : '' }}>Security</option>
                    <option value="sdm_training" {{ $documentation->category === 'sdm_training' ? 'selected' : '' }}>Pelatihan SDM</option>
                    <option value="engineering" {{ $documentation->category === 'engineering' ? 'selected' : '' }}>Engineering</option>
                    <option value="production" {{ $documentation->category === 'production' ? 'selected' : '' }}>Tenaga Produksi</option>
                    <option value="backoffice" {{ $documentation->category === 'backoffice' ? 'selected' : '' }}>Backoffice</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
