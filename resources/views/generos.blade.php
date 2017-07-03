<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <ul>
      @foreach($generos as $genero)
        <li>
          {{$genero->name}}
          <ul>
            @foreach($genero->movies as $movie)
              <li>
                {{$movie->title}}
              </li>
            @endforeach
          </ul>
        </li>
      @endforeach
    </ul>
  </body>
</html>
