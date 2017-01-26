<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
	/*********************************** RELACIONES ***********************************/
    //Uno a muchos
	public function usuario() {
		return $this->belongsTo('luj\Models\User');
	}
	
	public function video() {
		return $this->belongsTo('luj\Models\Video');
	}
}
