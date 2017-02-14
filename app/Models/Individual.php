<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $table='individuales';
	
	//Es un, heredera
    public function competidor()
    {
        return $this->morphOne('luj\Models\Competidor', 'competible');
    }

	//Ternaria con equipos y modalidades
    public function equipos(){
    	return $this->belongsToMany('Equipo');
  	}

  	public function participaciones(){
    	return $this->belongsToMany('Modalidad', 'equipo_individual_modalidad');
  	}
    //La funcion debe devolver al equipo al que pertenece segun la modalidad (relacion individual-modalidad-equipo) (viejo)
    public function getEquipo($modalidad){
		return $this->modalidades->find($modalidad)->equipos();
	}
}
