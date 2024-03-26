<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.navbar')

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    .container-artikel {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .judul-artikel {
      text-align: center;
      width: 100%;
      padding: 20px;
    }

    .article-container {
      position: relative;
      width: 100%;
      max-width: 600px;
      margin: 20px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 8px;
      overflow: hidden;
      box-sizing: border-box;
      transition: transform 0.3s; /* Adding smooth transition for zoom effect */
    }

    .article-container:hover {
      transform: scale(1.1); /* Zoom effect on hover */
    }

    .article-container:nth-child(even) {
      margin-right: 0;
    }

    .foto {
      position: relative;
      width: 100%;
      height: 0;
      padding-bottom: 75%;
    }

    .foto img {
      position: absolute;
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 8px;
    }

    .article-content {
      display: flex;
      justify-content: space-between;
      align-items: flex-end;
      overflow: hidden;
      height: 3.6em;
      margin-top: 10px;
    }

    .article-title {
      font-size: 1.2em;
      overflow: hidden;
      text-overflow: ellipsis;
      white-space: nowrap;
      margin-bottom: 5px;
      margin-top: 5px;
      font-weight: bold;
    }

    .article-details,
    .read-more-wrapper {
      flex-grow: 1;
    }

    .article-details {
      margin-right: 10px;
    }

    .article-date {
      font-style: italic;
    }

    .read-more-wrapper {
      text-align: right;
    }

    .btn-custom {
      padding: 5px 10px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 4px;
      transition: background-color 0.3s; /* Adding smooth transition for button color change */
    }

    .btn-custom:hover {
      background-color: #0056b3; /* Change button color on hover */
    }

    @media (max-width: 767px) {
      .article-content {
        flex-direction: column;
        align-items: flex-start;
        height: auto;
      }

      .article-details,
      .read-more-wrapper {
        margin-top: 10px;
      }
    }
  </style>
</head>

<body>

  <div class="container-artikel">
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
  @include('layouts.whatsapp')

</body>

</html>
