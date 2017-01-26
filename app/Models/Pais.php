<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table='paises';
    //public $timestamps = false;

    /*********************************** RELACIONES ***********************************/
	//Uno a muchos
 	public function tcompeticiones() {
        return $this->hasMany('luj\Models\Tcompeticion');
    }

 	public function competidores() {
        return $this->hasMany('luj\Models\Competidor')->orderBy('nombre', 'asc');
    }

    /*********************************** FUNCIONES ***********************************/
    public function bandera(){   
        return 'img/banderas/'.$this->bandera;
    }

    public function pathBandera(){   
        return 'img/banderas/';
    }
}
