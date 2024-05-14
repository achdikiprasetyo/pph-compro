@extends('layouts.navbar')

@section('page-css')
    <link rel="stylesheet" href="{{asset('css/listArtikel.css')}}">
@endsection

@section('content')<div class="container-artikel">
  <div class="judul-artikel animated-element" data-animation="fadeIn">
    <h1>Daftar Artikel</h1>
  </div>

  @foreach ($articles as $article)
    <div class="article-container animated-element" data-animation="fadeIn">
      <div class="foto">
        <img src="{{ $article->image_url }}" alt="Article Image">
      </div>

      <h2 class="article-title">{{ $article->title }}</h2>

      <div class="article-content">
        <div class="article-details">
          <p class="article-date">Diposting pada: {{ $article->created_at->format('d F Y') }}</p>
        </div>
        <div class="read-more-wrapper">
          <p><a class="btn-custom" href="{{ route('articles.show', $article->id) }}">Baca Selengkapnya</a></p>
        </div>
      </div>
    </div>
  @endforeach
</div>
@include('layouts.footer')
@endsection