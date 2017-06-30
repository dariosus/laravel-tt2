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
}
