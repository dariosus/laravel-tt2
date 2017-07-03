@extends("layouts.master")

@section("css")
  <link rel="stylesheet" href="/css/app.css">
@endsection

@section("contenido")
    <ul>
      @foreach ($moviesVista as $movie)
          <li>
            <a href="/peliculas/{{$movie->id}}">
              {{$movie->title}} - {{$movie->rating}} - {{$movie->getGeneroNombre()}}
            </a>
            <ul>
              @foreach($movie->actores as $actor)
                <li>
                  {{$actor->getNombreCompleto()}}
                </li>
              @endforeach
            </ul>
          </li>
      @endforeach
    </ul>
@endsection
