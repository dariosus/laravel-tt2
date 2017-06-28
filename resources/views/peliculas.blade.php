@extends("layouts.master")

@section("css")
  <link rel="stylesheet" href="/css/app.css">
@endsection

@section("contenido")
    <ul>
      @foreach ($moviesVista as $movie)
          <li>
            {{$movie->title}} - {{$movie->rating}}
          </li>
      @endforeach
    </ul>
@endsection
