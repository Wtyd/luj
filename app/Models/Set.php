<?php

namespace luj\Models;

use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
	//es una entidad debil relacionada con partido no se si es asi
    //Uno a muchos
	public function partido() {
		return $this->belongsTo('luj\Models\Partido');
	}
}
