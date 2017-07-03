<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    //protected $primaryKey = "idPelicula";
    //protected $timestamps = false;

    //protected $fillable = ["title", "rating"];

    protected $guarded = [];


    public function getTituloYDuracion() {
      return $this->title . " " . $this->length;
    }

    public function getDia() {
      $explotado = explode("-", $this->release_date);
      return $explotado[2];
    }

    public function getMes() {
      $explotado = explode("-", $this->release_date);
      return $explotado[1];
    }

    public function getAnio() {
      $explotado = explode("-", $this->release_date);
      return $explotado[0];
    }

    public function genero() {
      return $this->belongsTo("App\Genre", "genre_id");
    }

    public function getGeneroNombre() {
      $genero = $this->genero;

      if ($genero == null) {
        return "";
      } else {
        return $genero->name;
      }
    }

    public function actores() {
      return $this->belongsToMany("App\Actor", "actor_movie", "movie_id", "actor_id");
    }
}
