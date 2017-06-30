@extends("layouts.master")

@section("css")
  <link rel="stylesheet" href="/css/app.css">
@endsection

@section("contenido")
    <ul>
      @foreach ($moviesVista as $movie)
          <li>
            <a href="/peliculas/{{$movie->id}}">
              {{$movie->title}} - {{$movie->rating}}
            </a>
          </li>
      @endforeach
    </ul>
@endsection
