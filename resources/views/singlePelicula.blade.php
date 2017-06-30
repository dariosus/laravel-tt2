<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <ul>
      <li>
        Titulo: {{$movie->title}}
      </li>
      <li>
        Rating {{$movie->rating}}
      </li>
      <li>
        Premios {{$movie->awards}}
      </li>
    </ul>
    <a href="/peliculas/{{$movie->id}}/delete">Borrar Película</a>
  </body>
</html>
