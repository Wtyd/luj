<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table='paises';

    /*********************************** RELACIONES ***********************************/
	//Uno a muchos
 	public function tcompeticiones() {
        return $this->hasMany('App\Models\Tcompeticion');
    }

 	public function competidores() {
        return $this->hasMany('App\Models\Competidor')->orderBy('nombre', 'asc');
    }

    /*********************************** FUNCIONES ***********************************/
    public function bandera(){   
        return 'img/banderas/'.$this->bandera;
    }

    public function pathBandera(){   
        return 'img/banderas/';
    }
}
