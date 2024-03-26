<!-- resources/views/articles/edit.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Artikel</h1>

        <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Judul:</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $article->title }}" required>
            </div>

            <div class="form-group">
                <label for="content">Konten:</label>
                <textarea class="form-control" name="content" id="content" rows="4" required>{{ $article->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" class="form-control-file" name="image" id="image" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        <p class="mt-3"><a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali ke Daftar Artikel</a></p>
    </div>
@endsection
