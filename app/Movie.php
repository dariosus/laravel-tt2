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
}
