<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function email() {
      return $this->hasOne("App\Email", "idUsuario", "idEmail");
    }
}
