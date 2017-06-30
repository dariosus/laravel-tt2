<html>
    <head>
        <title>Agregar Pelicula</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container">
          <div class="jumbotron">
            <h1>Agregar Pelicula</h1>
          </div>
          @if (count($errors) > 0)
          		<div class="alert alert-danger">
              		<ul>
      	            @foreach ($errors->all() as $error)
      	                <li>{{ $error }}</li>
      	            @endforeach
          		   </ul>
      	    </div>
      	@endif

          <form id="agregarPelicula" name="agregarPelicula" method="POST" action="/peliculas/agregar">

              {{ csrf_field() }}
              <div>
                  <label for="titulo">Titulo</label>
                  <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}"/>
              </div>
              <div>
                  <label for="rating">Rating</label>
                  <input type="text" name="rating" id="rating" value="{{old('rating')}}"/>
              </div>
              <div>
                  <label for="premios">Premios</label>
                  <input type="text" name="premios" id="premios" value="{{old('premios')}}"/>
              </div>
              <div>
                  <label for="duracion">Duracion</label>
                  <input type="text" name="duracion" id="duracion" value="{{old('duracion')}}"/>
              </div>
              <div>
                  <label>Fecha de Estreno</label>
                  <select name="dia">
                      <option value="">Dia</option>
                      @for ($i=1; $i < 32; $i++)
                          @if ($i == old("dia"))
                            <option value="{{$i}}" selected>{{$i}}</option>
                          @else
                            <option value="{{$i}}">{{$i}}</option>
                          @endif
                      @endfor
                  </select>
                  <select name="mes">
                      <option value="">Mes</option>
                      @for ($i=1; $i < 13; $i++)
                        @if ($i == old("mes"))
                          <option value="{{$i}}" selected>{{$i}}</option>
                        @else
                          <option value="{{$i}}">{{$i}}</option>
                        @endif
                      @endfor
                  </select>
                  <select name="anio">
                      <option value="">Año</option>
                      @for ($i=1900; $i < 2017; $i++)
                        @if ($i == old("anio"))
                          <option value="{{$i}}" selected>{{$i}}</option>
                        @else
                          <option value="{{$i}}">{{$i}}</option>
                        @endif
                      @endfor
                  </select>
              </div>
              <input type="submit" value="Agregar Pelicula" name="submit"/>
          </form>
        </div>
    </body>
</html>
