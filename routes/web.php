<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/bienvenidos", function() {
  return view("prueba.prueba");
});

Route::get("/saludar/{nombre}", function($nombre) {
  return "<h1>Bienvenidos $nombre</h1>";
});

Route::get("/peliculas", "PeliculasController@listar");

Route::get("/peliculas/agregar", "PeliculasController@agregar");

Route::post("/peliculas/agregar", "PeliculasController@agregar");

Route::get("/peliculas/{id}", "PeliculasController@mostrar");

Route::get("modificarpelicula", "PeliculasController@modificar");
