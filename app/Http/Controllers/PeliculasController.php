<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;

class PeliculasController extends Controller
{
    public function listar() {

      $movies = App\Movie::where("rating", ">", 3)
        ->where("length", ">", "90")
        ->orderBy("title")
        ->get();

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
}
