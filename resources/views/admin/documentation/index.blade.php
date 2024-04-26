<!-- resources/views/admin/documentation/index.blade.php -->

@extends('layouts.admin') <!-- Sesuaikan dengan layout admin yang Anda gunakan -->

@section('content')
@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif
    <div class="container">
        <h2>Semua Foto Dokumentasi</h2>

        <table class="table">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Foto</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <a href="{{ route('admin.documentation.create') }}" class="btn btn-primary">Tambah Dokumentasi</a>
                @foreach($documentations as $documentation)
               
                    <tr>
                        <td>{{ $documentation->title }}</td>
                        <td><img src="{{ asset('storage/' . $documentation->image_path) }}" alt="{{ $documentation->title }}" style="max-width: 100px;"></td>
                        <td>{{ $documentation->category }}</td>
                        <td>
                            <a href="{{ route('admin.documentation.edit', $documentation->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('admin.documentation.delete', $documentation->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus foto dokumentasi?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
