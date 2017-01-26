<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Individual extends Model
{
    protected $table='individuales';

    //La funcion debe devolver al equipo al que pertenece segun la modalidad (relacion individual-modalidad-equipo)
    public function getEquipo($modalidad){
		return $this->modalidades->find($modalidad)->equipos();
	}
}
