<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    protected $table='servidores';
	/*********************************** RELACIONES ***********************************/
    //Uno a muchos
	public function videos() {
		return $this->hasMany('luj\Models\Video');
	}
}
