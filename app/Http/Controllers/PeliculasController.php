<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;
use App\Movie;

class PeliculasController extends Controller
{
    public function listar() {
      $movies = App\Movie::all();

      return view("peliculas", ["moviesVista" => $movies]);
    }

    public function mostrar($id) {
      $peli = App\Movie::find($id);

      return view("singlePelicula", ["movie" => $peli]);
    }

    function agregar() {
        return view("agregarPelicula");
    }

    public function modificar() {
      $peli = App\Movie::find(1);

      $peli->title = "Avatar 2";

      $peli->save();
    }

    public function add() {
      return view("agregarPelicula");
    }

    public function store(Request $request) {
      //$datos = $request->input('titulo');
      //$datos = $request->all();
      //$datos = $request->only('titulo', 'rating', 'dia');

      $condiciones = [
        "titulo" => "required|min:3|unique:movies,title",
        "rating" => "required|numeric|min:0|max:10",
        "premios" => "required|integer|min:0",
        "duracion" => "required|integer|min:0",
        "dia" => "required|integer|min:1|max:31",
        "mes" => "required|integer|min:1|max:12",
        "anio" => "required|integer|min:1900|max:2017",
      ];

      $mensajes = [

        "unique" => "El :attribute ya estaba en uso",
        "min" => "El campo :attribute debe ser mayor a :min",
        "max" => "El campo :attribute debe ser menor a :max",
        "numeric" => "El campo :attribute debe ser numerico",
        "integer" => "El campo :attribute debe ser un número entero"
      ];

      $this->validate($request, $condiciones, $mensajes);


      $miPeli = new Movie;

      $miPeli->title = $request->input("titulo");
      $miPeli->awards = $request->input("premios");
      $miPeli->rating = $request->input("rating");
      $miPeli->length = $request->input("duracion");
      $miPeli->release_date = $request->input("anio") . "-" . $request->input("mes") . "-" . $request->input("dia");

      $miPeli->save();

      return redirect('/peliculas');
    }

    public function update(Request $request, $id) {
      //$datos = $request->input('titulo');
      //$datos = $request->all();
      //$datos = $request->only('titulo', 'rating', 'dia');

      $condiciones = [
        "titulo" => "required|min:3",
        "rating" => "required|numeric|min:0|max:10",
        "premios" => "required|integer|min:0",
        "duracion" => "required|integer|min:0",
        "dia" => "required|integer|min:1|max:31",
        "mes" => "required|integer|min:1|max:12",
        "anio" => "required|integer|min:1900|max:2017",
      ];

      $mensajes = [

        "unique" => "El :attribute ya estaba en uso",
        "min" => "El campo :attribute debe ser mayor a :min",
        "max" => "El campo :attribute debe ser menor a :max",
        "numeric" => "El campo :attribute debe ser numerico",
        "integer" => "El campo :attribute debe ser un número entero"
      ];

      $this->validate($request, $condiciones, $mensajes);

      $miPeli = Movie::find($id);

      $miPeli->title = $request->input("titulo");
      $miPeli->awards = $request->input("premios");
      $miPeli->rating = $request->input("rating");
      $miPeli->length = $request->input("duracion");
      $miPeli->release_date = $request->input("anio") . "-" . $request->input("mes") . "-" . $request->input("dia");

      $miPeli->save();

      return redirect('/peliculas');
    }

    public function edit($id) {
      $movie = Movie::find($id);

      return view("editarPelicula", ["movie" => $movie]);
    }

    public function delete($id) {
      $movie = Movie::find($id);

      $movie->delete();

      return redirect('/peliculas');
    }
}
