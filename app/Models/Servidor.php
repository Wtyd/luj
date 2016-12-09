<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    protected $table='servidores';
	/*********************************** RELACIONES ***********************************/
    //Uno a muchos
	public function videos() {
		return $this->hasMany('App\Models\Video');
	}
}
