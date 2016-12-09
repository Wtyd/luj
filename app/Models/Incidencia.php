<?php

namespace luj;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
	/*********************************** RELACIONES ***********************************/
    //Uno a muchos
	public function usuario() {
		return $this->belongsTo('App\Models\User');
	}
	
	public function video() {
		return $this->belongsTo('App\Models\Video');
	}
}
