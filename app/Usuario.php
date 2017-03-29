<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    public function getUsuario(){
    	return "get usuario";
    }

    public static function listaUsuario()
    {
    	return "lista usuarios";
    }
}
