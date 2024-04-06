@extends('layouts.admin')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h2 class="mb-0">Buat Artikel Baru</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('articles.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul:</label>
                            <input type="text" class="form-control" name="title" id="title" required>
                        </div>

                        <div class="form-group">
                            <label for="content">Konten:</label>
                            <textarea class="form-control" name="content" id="content" rows="8" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Gambar:</label>
                            <input type="file" class="form-control-file" name="image" id="image" accept="image/*">
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                    </form>
                </div>
            </div>
            <div class="mt-4 text-right">
                <a href="{{ route('admin.index') }}" class="btn btn-secondary">Kembali ke Daftar Artikel</a>
            </div>
        </div>
    </div>
</div>
@endsection
