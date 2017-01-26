<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    //public $timestamps = false;
    /*********************************** RELACIONES ***********************************/
	//Uno a muchos
	public function tcompeticiones() {
		return $this->hasMany('luj\Models\Tcompeticion');
	}

 	public function competidores() {
        return $this->hasMany('luj\Models\Competidores');
    }

	/*********************************** FUNCIONES ***********************************/
    public static function icono(){   
        return 'img/deportes/';
    }
}
