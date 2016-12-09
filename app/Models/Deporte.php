<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Deporte extends Model
{
    /*********************************** RELACIONES ***********************************/
	//Uno a muchos
	public function tcompeticiones() {
		return $this->hasMany('App\Models\Tcompeticion');
	}

 	public function competidores() {
        return $this->hasMany('App\Models\Competidores');
    }

	/*********************************** FUNCIONES ***********************************/
    public static function icono(){   
        return 'img/deportes/';
    }
}
