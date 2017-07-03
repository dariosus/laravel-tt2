<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Movie;
use App\Actor;
class GenerosController extends Controller
{
    public function listar() {
      $generos = Genre::all();
      return view("generos", ["generos" => $generos]);
    }

    public function test() {
      $peli = New Movie;
      $peli->title = "PRUEBA PRUEBA";
      $peli->awards = 2;
      $peli->rating = 5.5;
      $peli->length = 120;
      $peli->release_date = "1990-10-10";
      $peli->genre_id = 3;

      $peli->save();
    }

    public function test2() {
      $peli = New Movie;
      $peli->title = "PRUEBA ASOCIATE";
      $peli->awards = 2;
      $peli->rating = 5.5;
      $peli->length = 120;
      $peli->release_date = "1990-10-10";

      $genero = Genre::find(3);

      $peli->genero()->associate($genero);
      $peli->save();
    }

    public function asociarPeliConActor() {
      $peli = Movie::find(1);
      $actor = Actor::find(10);

      $peli->actores()->attach($actor->id);

      
    }
}
