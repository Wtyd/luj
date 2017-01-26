<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class JornadaTableSeeder extends Seeder {
	
	public function run() {
		DB::table('grupo_jornada')->truncate();
		DB::table('jornadas')->truncate();
		$fecha = date("Y-m-d H:i:s");

		/* Recibe el nombre de la liga.
		Crea un numero de jornadas segun el num_jornadas de la modalidad y las asigna al grupo de dicha modalidad */
		function ligas($nombre){
			$semana = new DateInterval('P7D'); //Intervalo de una semana
			$comp = luj\Models\Competicion::where('nombre', $nombre)->first();
			$mod = $comp->modalidades()->first();
			// Las jornadas se suelen disputar durante dos dias, retrasamos una semana pa
			$fi = new DateTime($comp->fecha_inicio);
			$ff = new DateTime($comp->fecha_inicio);
			$ff->add(new DateInterval('P2D')); //le añado dos dias
			$p = $mod->num_participantes/2 ;
			
			for($i=1; $i <= $mod->num_jornadas; $i++){
				$j=factory(luj\Models\Jornada::class)->create([
				'nombre' => 'Jornada '.$i, 'num_jornada' => $i, 'num_partidos' => $p, 'fecha_inicio' => $fi, 'fecha_fin' => $ff,'modalidad_id' => $mod->id,'created_at' => $fi, 'updated_at' => $fi]);
				//primer array elementos a añadir, segundo, otras columnas del elemento a añadir
				$j->grupos()->sync([$mod->grupos()->first()->id => ['created_at' => $fi,  'updated_at' => $fi]]);
				$ff->add($semana);
				$fi->add($semana);
			}
		} //END LIGAS

		function liguillas($nombre){
			$semana = new DateInterval('P7D'); //Intervalo de una semana
			$comp = luj\Models\Competicion::where('nombre', $nombre)->first();
			$mod = $comp->modalidades()->first();
			// Las jornadas se suelen disputar durante dos dias, retrasamos una semana pa
			$fi = new DateTime($comp->fecha_inicio);
			$ff = new DateTime($comp->fecha_inicio);
			$ff->add(new DateInterval('P2D')); //le añado dos dias
			$p = $mod->num_participantes/2;

			for($i=1; $i <= $mod->num_jornadas; $i++){
				$j=factory(luj\Models\Jornada::class)->create([
				'nombre' => 'Jornada '.$i, 'num_jornada' => $i, 'num_partidos' => $p, 'partidosXronda' => 1, 'fecha_inicio' => $fi, 'fecha_fin' => $ff,'modalidad_id' => $mod->id,'created_at' => $fi, 'updated_at' => $fi]);
				//Creo un array con los ids de los grupos de la competicion
				$array = [];
				foreach($mod->grupos()->get() as $g){
					array_push($array, $g->id);
				}
				//Combino los ids con las fechas de cada jornada
				$pivotData = array_fill(0, count($array), ['created_at' => $fi, 'updated_at' => $fi]);
				$syncData  = array_combine($array, $pivotData);
				//Introduzco el array en la BD
				$j->grupos()->sync($syncData);
				$ff->add($semana);
				$fi->add($semana);
			}

		} //END LIGUILLAS

		function elimininatorias($nombre, $primeraMod, $partidosXronda){
			$semana = new DateInterval('P7D'); //Intervalo de una semana
			$comp = luj\Models\Competicion::where('nombre', $nombre)->first();
			$ronda = [32 => 'Dieciseisavos de Final', 16 => 'Octavos de Final', 8 => 'Cuartos de Final', 4 => 'Semifinal', 2 => 'Final'];

			$mod = $comp->modalidades()->get();
			for ($k=$primeraMod; $k < count($mod); $k++) {
				//Si hay una modalidad previa cojo la fecha de la ultima jornada
				if($comp->secuenciales){
					$jornadas=$mod[$k-1]->jornadas()->get();
					$j=$jornadas[count($jornadas)-1]; //accedo a la ultima joranda
					$fi = new DateTime($j->fecha_inicio);
					$ff = new DateTime($j->fecha_fin);
					$fi->add($semana);
					$ff->add($semana);

				}
				else{
					$fi = new DateTime($comp->fecha_inicio);
					$ff = new DateTime($comp->fecha_inicio);
				}

				$participantes = $mod[$k]->num_participantes;
				$p = $participantes/2;
				$grupos = $mod[$k]->grupos()->get();

				for($i=1; $i <= $mod[$k]->num_jornadas; $i++){
					$j=factory(luj\Models\Jornada::class)->create([
					'nombre' => $ronda[$participantes], 'num_jornada' => $i, 'num_partidos' => $p, 'partidosXronda' => $partidosXronda[$i], 'fecha_inicio' => $fi, 'fecha_fin' => $ff,'modalidad_id' => $mod[$k]->id,'created_at' => $fi, 'updated_at' => $fi]);
						//primer array elementos a añadir, segundo, otras columnas del elemento a añadir
					$j->grupos()->sync([$grupos[$i-1]->id=> ['created_at' => $fi,  'updated_at' => $fi]]);
					$p=$p/2;
					$participantes=$participantes/2;
					$ftercerPuesto=$fi;
					$fi->add($semana);
					$ff->add($semana);	
				}//num_jornadas
				//Si hay mas grupos que jornadas es pq se juega por el 3puesto en la jornada de la final
				if(count($grupos) > $mod[$k]->num_jornadas){
					//usamos attach para no cargarnos la otra asociacion
					$j->grupos()->attach([$grupos[$i-1]->id=> ['created_at' => $ftercerPuesto,  'updated_at' => $ftercerPuesto]]);
				}
			}//modalidades			
		}//END FUNCION
/*
		//JORNADAS LIGAS
		ligas('BBVA');
		ligas('Santander');
		ligas('Bundesliga');
		ligas('Premier League');*/
		liguillas('Champions League');
		ligas('Liga Endesa');

		//JORNADAS ELIMINATORIAS
		$otros=[1,1,1,1,1,1,1,1,1,1];//EuroBasket, Roland Garros, UEFA EURO,
		$champions=[1=>2, 2, 2, 1];
		$endesa=[1=>3, 5, 5];
		$davis=[1=>5, 5, 5, 5];
		

		elimininatorias('Champions League', 1, $champions);
		elimininatorias('Liga Endesa', 1, $endesa);
		elimininatorias('Roland Garros', 0, $otros);
		elimininatorias('Copa Davis', 0, $davis);

	
	
	}
}	