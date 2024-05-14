@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('css/artikel.css') }}">
@endsection

@section('content')

<div class="container animated-element" data-animation="fadeIn">
    <h1>{{ $article->title }}</h1>
    <p class="article-date">Diposting pada: {{ $article->created_at->format('d F Y') }}</p>
    <img class="image animated-element" data-animation="fadeIn" src="{{ $article->image_url }}" alt="Article Image">
    <div>{!! $article->content !!}</div>
    
    <p><a href="{{ route('articles.index') }}">Kembali ke Daftar Artikel</a></p>
</div>
@include('layouts.footer') 
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                CKEDITOR.replace('content');
            });
</script>
   
@endsection
