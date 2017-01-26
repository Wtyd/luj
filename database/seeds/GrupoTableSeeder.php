<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GrupoTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('grupos')->truncate();
		$fecha = date("Y-m-d H:i:s");
		
		//******************** Liga BBVA ********************
		$mod = luj\Models\Competicion::where('nombre', 'BBVA')->first()->modalidades()->first();
		$bbva=[
			'nombre' => 'Grupo Liga',
        	'num_jornadas' =>  $mod->num_jornadas,
        	'num_equipos' => $mod->num_participantes,
        	'modalidad_id' => $mod->id,
        	'created_at' => $fecha,
			'updated_at' => $fecha
		];

		//$e = luj\Models\Competicion::where('pais', 1)->slice(0, 20); //slice: empieza en 0 y me devuelve hasta el 20
		//******************** Liga Santander ********************
		$mod = luj\Models\Competicion::where('nombre', 'Santander')->first()->modalidades()->first();
		$santander=[
			'nombre' => 'Grupo Liga',
        	'num_jornadas' =>  $mod->num_jornadas,
        	'num_equipos' => $mod->num_participantes,
        	'modalidad_id' => $mod->id,
        	'created_at' => $fecha,
			'updated_at' => $fecha
		];
		//******************** Liga Bundesliga ********************
		$mod = luj\Models\Competicion::where('nombre', 'Bundesliga')->first()->modalidades()->first();
		$bundesliga=[
			'nombre' => 'Grupo Liga',
        	'num_jornadas' =>  $mod->num_jornadas,
        	'num_equipos' => $mod->num_participantes,
        	'modalidad_id' => $mod->id,
        	'created_at' => $fecha,
			'updated_at' => $fecha
		];
		//******************** Liga Premier League ********************
		$mod = luj\Models\Competicion::where('nombre', 'Premier League')->first()->modalidades()->first();
		$premier=[
			'nombre' => 'Grupo Liga',
        	'num_jornadas' =>  $mod->num_jornadas,
        	'num_equipos' => $mod->num_participantes,
        	'modalidad_id' => $mod->id,
        	'created_at' => $fecha,
			'updated_at' => $fecha
		];
		//******************** Champions League ********************
		$mod = luj\Models\Competicion::where('nombre', 'Champions League')->first()->modalidades()->get();
		//Fase de Grupos
		$champ_grupos=[];
		for ($i=0; $i < $mod[0]->num_grupos; $i++){
			$g=[
				'nombre' => 'Grupo '.chr(65+$i),
	        	'num_jornadas' =>  $mod[0]->num_jornadas,
	        	'num_equipos' => $mod[0]->num_participantes/$mod[0]->num_grupos,
	        	'modalidad_id' => $mod[0]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			array_push($champ_grupos, $g);
		}
		//Fase Final
		$x=$mod[1]->num_participantes;
		for ($i=0; $i < $mod[1]->num_grupos; $i++){
			$g=[
				'nombre' => strval($x/2)."'s",
	        	'num_jornadas' =>  2,
	        	'num_equipos' => $x,
	        	'modalidad_id' => $mod[1]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			$x=$x/2;
			array_push($champ_grupos, $g);
		}
		$champ_grupos[count($champ_grupos)-1]['num_jornadas'] = 1; //la ultima jornada es la final
		$champ_grupos[count($champ_grupos)-1]['nombre'] = 'Final';
		//******************** UEFA EURO 2016 ********************
		$mod = luj\Models\Competicion::where('nombre', 'UEFA EURO 2016')->first()->modalidades()->get();
		//Fase de Grupos
		$uefa_euro=[];
		for ($i=0; $i < $mod[0]->num_grupos; $i++){
			$g=[
				'nombre' => 'Grupo '.chr(65+$i),
	        	'num_jornadas' =>  $mod[0]->num_jornadas,
	        	'num_equipos' => $mod[0]->num_participantes/$mod[0]->num_grupos,
	        	'modalidad_id' => $mod[0]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			array_push($uefa_euro, $g);
		}
		//Fase Final
		$x=$mod[1]->num_participantes;
		for ($i=0; $i < $mod[1]->num_grupos; $i++){
			$g=[
				'nombre' => strval($x/2)."'s",
	        	'num_jornadas' =>  1,
	        	'num_equipos' => $x,
	        	'modalidad_id' => $mod[1]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			$x=$x/2;
			array_push($uefa_euro, $g);
		}
		$uefa_euro[count($uefa_euro)-1]['nombre'] = 'Final';
		//******************** Liga Endesa ********************
		$mod = luj\Models\Competicion::where('nombre', 'Liga Endesa')->first()->modalidades()->get();
		//Fase de Grupos
		$endesa=[];
		for ($i=0; $i < $mod[0]->num_grupos; $i++){
			$g=[
				'nombre' => 'Grupo Liga',
	        	'num_jornadas' =>  $mod[0]->num_jornadas,
	        	'num_equipos' => $mod[0]->num_participantes/$mod[0]->num_grupos,
	        	'modalidad_id' => $mod[0]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			array_push($endesa, $g);
		}
		//Fase Final
		$x=$mod[1]->num_participantes;
		for ($i=0; $i < $mod[1]->num_grupos; $i++){
			$g=[
				'nombre' => strval($x/2)."'s",
	        	'num_jornadas' =>  5, //mejor de 5 partidos
	        	'num_equipos' => $x,
	        	'modalidad_id' => $mod[1]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			$x=$x/2;
			array_push($endesa, $g);
		}
		$endesa[count($endesa)-3]['num_jornadas'] = 3; //Los cuartos son al mejor de 3 partidos
		$endesa[count($endesa)-1]['nombre'] = 'Final';
		//******************** EuroBasket ********************
		$mod = luj\Models\Competicion::where('nombre', 'EuroBasket')->first()->modalidades()->get();
		//Fase de Grupos
		$euroBasket=[];
		for ($i=0; $i < $mod[0]->num_grupos; $i++){
			$g=[
				'nombre' => 'Grupo Liga',
	        	'num_jornadas' =>  $mod[0]->num_jornadas,
	        	'num_equipos' => $mod[0]->num_participantes/$mod[0]->num_grupos,
	        	'modalidad_id' => $mod[0]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			array_push($euroBasket, $g);
		}
		//Fase Final
		$x=$mod[1]->num_participantes;
		for ($i=0; $i < $mod[1]->num_grupos; $i++){
			if($x>1){
				$nombre = strval($x/2)."'s";
			}
			else $nombre="Tercero";
			$g=[
				'nombre' => $nombre,
	        	'num_jornadas' =>  1,
	        	'num_equipos' => $x,
	        	'modalidad_id' => $mod[1]->id,
	        	'created_at' => $fecha,
				'updated_at' => $fecha
			];
			$x=$x/2;
			array_push($euroBasket, $g);
		}
		$euroBasket[count($euroBasket)-2]['nombre'] = 'Final'; //el ultimo grupo es para el 3er puesto
		//******************** Roland Garros ********************
		$rolandGarros=[];
		foreach (luj\Models\Competicion::where('nombre', 'Roland Garros')->first()->modalidades()->get() as $mod) {
			$x=$mod->num_participantes;
			for ($i=0; $i < $mod->num_grupos; $i++){
				$g=[
					'nombre' => strval($x/2)."'s",
		        	'num_jornadas' =>  1,
		        	'num_equipos' => $x,
		        	'modalidad_id' => $mod->id,
		        	'created_at' => $fecha,
					'updated_at' => $fecha
				];
				$x=$x/2;
				array_push($rolandGarros, $g);
			}
			$rolandGarros[count($rolandGarros)-1]['nombre'] = 'Final';
		}
		//******************** Copa Davis ********************
		$CopaDavis=[];
		$mod = luj\Models\Competicion::where('nombre', 'Copa Davis')->first()->modalidades()->first();
			$x=$mod->num_participantes;
			for ($i=0; $i < $mod->num_grupos; $i++){
				$g=[
					'nombre' => strval($x/2)."'s",
		        	'num_jornadas' =>  1,
		        	'num_equipos' => $x,
		        	'modalidad_id' => $mod->id,
		        	'created_at' => $fecha,
					'updated_at' => $fecha
				];
				$x=$x/2;
				array_push($CopaDavis, $g);
			}
			$CopaDavis[count($CopaDavis)-1]['nombre'] = 'Final';

		//******************** Array de Grupos ********************
		$grupos = [$bbva, $santander, $bundesliga, $premier];
		foreach($champ_grupos as $g)
			array_push($grupos, $g);
		foreach($uefa_euro as $g)
			array_push($grupos, $g);
		foreach($endesa as $g)
			array_push($grupos, $g);
		foreach($euroBasket as $g)
			array_push($grupos, $g);
		foreach($rolandGarros as $g)
			array_push($grupos, $g);
		foreach($CopaDavis as $g)
			array_push($grupos, $g);

		DB::table('grupos')->insert($grupos);
    }
}
