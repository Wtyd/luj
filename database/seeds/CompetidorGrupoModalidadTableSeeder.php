<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class CompetidorGrupoModalidadTableSeeder extends Seeder {

	public function run() {
		/* 
		Tablas pivote CompetidorGrupo y CompetidorModalidad.
		En esta tabla no es necesario usar truncate ya que la funcion attach crea una nueva entrada en la tabla si el elemento no existe y si ya existe simplemente lo actualiza. Sin embargo para mantener la BD "ordenada" seguiremos usando truncate
		*/
		DB::table('competidor_grupo')->truncate();
		DB::table('competidor_modalidad')->truncate(); 
/*
		$competidor = luj\Models\Competidor::where('nombre', 'Ath. Bilbao')->first();
		$p = luj\Models\Pais::where('nombre', 'España')->first();
		
		$c = luj\Models\Competidor::where('pais_id', $p->id)->where('deporte_id', 1)->get();
		$e = $c->where('nombre', 'Ath. Bilbao')->first(); */

		//******************************* LIGA BBVA 2015-16 *****************************************
		//https://es.wikipedia.org/wiki/Primera_Divisi%C3%B3n_de_Espa%C3%B1a_2015-16
	/*	$mod = luj\Models\Competicion::where('nombre', 'BBVA')->first()->modalidades()->first();
		$gID = $mod->grupos()->first()->id;
		$competidores = [];
		//$competidor->modalidades()->attach([$mod->id]);

		$competidor = luj\Models\Competidor::where('nombre', 'Barcelona')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 91, 'p_a_favor' => 112, 'p_en_contra' => 29, 'diferencia_p' => 83, 'partidos_totales' => 38, 'p_ganados' => 29, 'p_empatados' => 4, 'p_perdidos' => 5]]);
		array_push($competidores, $competidor->id); //añado el competidor al array

		$competidor = luj\Models\Competidor::where('nombre', 'R. Madrid')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 90, 'p_a_favor' => 110, 'p_en_contra' => 34, 'diferencia_p' => 76, 'partidos_totales' => 38, 'p_ganados' => 28, 'p_empatados' => 6, 'p_perdidos' => 4]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Atlético')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 88, 'p_a_favor' => 63, 'p_en_contra' => 18, 'diferencia_p' => 45, 'partidos_totales' => 38, 'p_ganados' => 28, 'p_empatados' => 4, 'p_perdidos' => 6]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Villarreal')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 64, 'p_a_favor' => 44, 'p_en_contra' => 35, 'diferencia_p' => 9, 'partidos_totales' => 38, 'p_ganados' => 18, 'p_empatados' => 10, 'p_perdidos' => 10]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Athletic')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 62, 'p_a_favor' => 58, 'p_en_contra' => 45, 'diferencia_p' => 13, 'partidos_totales' => 38, 'p_ganados' => 18, 'p_empatados' => 8, 'p_perdidos' => 10]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Celta')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 60, 'p_a_favor' => 51, 'p_en_contra' => 59, 'diferencia_p' => -8, 'partidos_totales' => 38, 'p_ganados' => 17, 'p_empatados' => 9, 'p_perdidos' => 12]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Sevilla')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 52, 'p_a_favor' => 51, 'p_en_contra' => 50, 'diferencia_p' => 1, 'partidos_totales' => 38, 'p_ganados' => 14, 'p_empatados' => 10, 'p_perdidos' => 14]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Málaga')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 48, 'p_a_favor' => 38, 'p_en_contra' => 35, 'diferencia_p' => 3, 'partidos_totales' => 38, 'p_ganados' => 12, 'p_empatados' => 12, 'p_perdidos' => 14]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'R. Sociedad')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 48, 'p_a_favor' => 45, 'p_en_contra' => 48, 'diferencia_p' => -3, 'partidos_totales' => 38, 'p_ganados' => 13, 'p_empatados' => 9, 'p_perdidos' => 16]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Betis')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 45, 'p_a_favor' => 34, 'p_en_contra' => 52, 'diferencia_p' => -18, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 12, 'p_perdidos' => 15]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Las Palmas')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 44, 'p_a_favor' => 45, 'p_en_contra' => 53, 'diferencia_p' => -8, 'partidos_totales' => 38, 'p_ganados' => 12, 'p_empatados' => 8, 'p_perdidos' => 18]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Valencia')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 44, 'p_a_favor' => 46, 'p_en_contra' => 48, 'diferencia_p' => -2, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 11, 'p_perdidos' => 16]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Espanyol')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 43, 'p_a_favor' => 40, 'p_en_contra' => 74, 'diferencia_p' => -34, 'partidos_totales' => 38, 'p_ganados' => 12, 'p_empatados' => 7, 'p_perdidos' => 19]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Eibar')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 43, 'p_a_favor' => 49, 'p_en_contra' => 61, 'diferencia_p' => -12, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 10, 'p_perdidos' => 17]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Deportivo')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 42, 'p_a_favor' => 45, 'p_en_contra' => 61, 'diferencia_p' => -16, 'partidos_totales' => 38, 'p_ganados' => 8, 'p_empatados' => 18, 'p_perdidos' => 12]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Granada')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 39, 'p_a_favor' => 46, 'p_en_contra' => 69, 'diferencia_p' => -23, 'partidos_totales' => 38, 'p_ganados' => 10, 'p_empatados' => 9, 'p_perdidos' => 19]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Sporting')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 39, 'p_a_favor' => 40, 'p_en_contra' => 62, 'diferencia_p' => -22, 'partidos_totales' => 38, 'p_ganados' => 10, 'p_empatados' => 9, 'p_perdidos' => 19]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Rayo')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 38, 'p_a_favor' => 52, 'p_en_contra' => 73, 'diferencia_p' => -21, 'partidos_totales' => 38, 'p_ganados' => 9, 'p_empatados' => 11, 'p_perdidos' => 18]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Getafe')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 36, 'p_a_favor' => 37, 'p_en_contra' => 67, 'diferencia_p' => -30, 'partidos_totales' => 38, 'p_ganados' => 9, 'p_empatados' => 9, 'p_perdidos' => 20]]);
		array_push($competidores, $competidor->id); 

		$competidor = luj\Models\Competidor::where('nombre', 'Levante')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 32, 'p_a_favor' => 37, 'p_en_contra' => 70, 'diferencia_p' => -33, 'partidos_totales' => 38, 'p_ganados' => 8, 'p_empatados' => 8, 'p_perdidos' => 22]]);
		array_push($competidores, $competidor->id); 


		$mod->competidores()->attach($competidores); //asocio los competidores a la modalidad
		
		//******************************* LIGA SANTANDER 2016-17 *****************************************
		//http://resultados.as.com/resultados/futbol/primera/clasificacion/ ACTUALIZADO A DIA: 28-01-2017 (jornada 20)
		$mod = luj\Models\Competicion::where('nombre', 'Santander')->first()->modalidades()->first();
		$gID = $mod->grupos()->first()->id;
		$competidores = [];

		$competidor = luj\Models\Competidor::where('nombre', 'R. Madrid')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 46, 'p_a_favor' => 51, 'p_en_contra' => 17, 'diferencia_p' => 34, 'partidos_totales' => 19, 'p_ganados' => 14, 'p_empatados' => 4, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Barcelona')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 42, 'p_a_favor' => 52, 'p_en_contra' => 18, 'diferencia_p' => 34, 'partidos_totales' => 20, 'p_ganados' => 12, 'p_empatados' => 6, 'p_perdidos' => 2]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Sevilla')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 42, 'p_a_favor' => 43, 'p_en_contra' => 23, 'diferencia_p' => 15, 'partidos_totales' => 20, 'p_ganados' => 13, 'p_empatados' => 3, 'p_perdidos' => 4]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Atlético')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 36, 'p_a_favor' => 34, 'p_en_contra' => 16, 'diferencia_p' => 18, 'partidos_totales' => 20, 'p_ganados' => 10, 'p_empatados' => 6, 'p_perdidos' => 4]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'R. Sociedad')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 35, 'p_a_favor' => 31, 'p_en_contra' => 28, 'diferencia_p' => 3, 'partidos_totales' => 20, 'p_ganados' => 11, 'p_empatados' => 2, 'p_perdidos' => 7]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Villarreal')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 34, 'p_a_favor' => 28, 'p_en_contra' => 14, 'diferencia_p' => 14, 'partidos_totales' => 20, 'p_ganados' => 9, 'p_empatados' => 7, 'p_perdidos' => 4]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Athletic')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 32, 'p_a_favor' => 26, 'p_en_contra' => 22, 'diferencia_p' => 4, 'partidos_totales' => 20, 'p_ganados' => 9, 'p_empatados' => 5, 'p_perdidos' => 6]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Celta')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 30, 'p_a_favor' => 31, 'p_en_contra' => 33, 'diferencia_p' => -2, 'partidos_totales' => 20, 'p_ganados' => 9, 'p_empatados' => 3, 'p_perdidos' => 8]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Espanyol')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 29, 'p_a_favor' => 28, 'p_en_contra' => 27, 'diferencia_p' => 1, 'partidos_totales' => 20, 'p_ganados' => 7, 'p_empatados' => 8, 'p_perdidos' => 5]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Eibar')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 29, 'p_a_favor' => 28, 'p_en_contra' => 29, 'diferencia_p' => -1, 'partidos_totales' => 20, 'p_ganados' => 8, 'p_empatados' => 5, 'p_perdidos' => 7]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Las Palmas')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 28, 'p_a_favor' => 31, 'p_en_contra' => 31, 'diferencia_p' => 0, 'partidos_totales' => 20, 'p_ganados' => 7, 'p_empatados' => 7, 'p_perdidos' => 6]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Alavés')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 24, 'p_a_favor' => 17, 'p_en_contra' => 20, 'diferencia_p' => -3, 'partidos_totales' => 20, 'p_ganados' => 5, 'p_empatados' => 9, 'p_perdidos' => 6]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Málaga')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 23, 'p_a_favor' => 28, 'p_en_contra' => 34, 'diferencia_p' => -6, 'partidos_totales' => 20, 'p_ganados' => 5, 'p_empatados' => 7, 'p_perdidos' => 8]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Betis')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 23, 'p_a_favor' => 21, 'p_en_contra' => 31, 'diferencia_p' => -10, 'partidos_totales' => 20, 'p_ganados' => 6, 'p_empatados' => 5, 'p_perdidos' => 9]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Valencia')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 19, 'p_a_favor' => 29, 'p_en_contra' => 36, 'diferencia_p' => -7, 'partidos_totales' => 19, 'p_ganados' => 5, 'p_empatados' => 4, 'p_perdidos' => 10]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Deportivo')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 19, 'p_a_favor' => 25, 'p_en_contra' => 32, 'diferencia_p' => -7, 'partidos_totales' => 20, 'p_ganados' => 4, 'p_empatados' => 7, 'p_perdidos' => 9]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Leganés')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 18, 'p_a_favor' => 15, 'p_en_contra' => 33, 'diferencia_p' => -18, 'partidos_totales' => 20, 'p_ganados' => 4, 'p_empatados' => 6, 'p_perdidos' => 10]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Sporting')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 13, 'p_a_favor' => 19, 'p_en_contra' => 39, 'diferencia_p' => -20, 'partidos_totales' => 20, 'p_ganados' => 3, 'p_empatados' => 4, 'p_perdidos' => 13]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Osasuna')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 10, 'p_a_favor' => 21, 'p_en_contra' => 43, 'diferencia_p' => -22, 'partidos_totales' => 20, 'p_ganados' => 1, 'p_empatados' => 7, 'p_perdidos' => 12]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Granada')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 10, 'p_a_favor' => 16, 'p_en_contra' => 44, 'diferencia_p' => -28, 'partidos_totales' => 20, 'p_ganados' => 1, 'p_empatados' => 7, 'p_perdidos' => 12]]);
		array_push($competidores, $competidor->id);


		$mod->competidores()->attach($competidores);
		
		//******************************* PREMIER LEAGUE 2015-16 *****************************************
		//https://es.wikipedia.org/wiki/Premier_League_2015-16
		$mod = luj\Models\Competicion::where('nombre', 'Premier League')->first()->modalidades()->first();
		$gID = $mod->grupos()->first()->id;
		$competidores = [];

		$competidor = luj\Models\Competidor::where('nombre', 'Leicester City')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 81, 'p_a_favor' => 68, 'p_en_contra' => 36, 'diferencia_p' => 32, 'partidos_totales' => 38, 'p_ganados' => 23, 'p_empatados' => 12, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Arsenal')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 71, 'p_a_favor' => 65, 'p_en_contra' => 36, 'diferencia_p' => 29, 'partidos_totales' => 38, 'p_ganados' => 20, 'p_empatados' => 11, 'p_perdidos' => 7]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'T. Hotspur')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 70, 'p_a_favor' => 69, 'p_en_contra' => 35, 'diferencia_p' => 34, 'partidos_totales' => 38, 'p_ganados' => 19, 'p_empatados' => 13, 'p_perdidos' => 6]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'M. City')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 66, 'p_a_favor' => 71, 'p_en_contra' => 41, 'diferencia_p' => 30, 'partidos_totales' => 38, 'p_ganados' => 19, 'p_empatados' => 9, 'p_perdidos' => 10]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'M. United')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 66, 'p_a_favor' => 49, 'p_en_contra' => 35, 'diferencia_p' => 14, 'partidos_totales' => 38, 'p_ganados' => 19, 'p_empatados' => 9, 'p_perdidos' => 10]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Southampton')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 63, 'p_a_favor' => 59, 'p_en_contra' => 41, 'diferencia_p' => 18, 'partidos_totales' => 38, 'p_ganados' => 18, 'p_empatados' => 9, 'p_perdidos' => 11]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'West Ham')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 62, 'p_a_favor' => 65, 'p_en_contra' => 51, 'diferencia_p' => 14, 'partidos_totales' => 38, 'p_ganados' => 16, 'p_empatados' => 14, 'p_perdidos' => 8]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Liverpool')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 60, 'p_a_favor' => 63, 'p_en_contra' => 50, 'diferencia_p' => 13, 'partidos_totales' => 38, 'p_ganados' => 16, 'p_empatados' => 12, 'p_perdidos' => 10]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Stoke City')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 51, 'p_a_favor' => 41, 'p_en_contra' => 55, 'diferencia_p' => -14, 'partidos_totales' => 38, 'p_ganados' => 14, 'p_empatados' => 9, 'p_perdidos' => 15]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Chelsea')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 50, 'p_a_favor' => 59, 'p_en_contra' => 53, 'diferencia_p' => 6, 'partidos_totales' => 38, 'p_ganados' => 12, 'p_empatados' => 14, 'p_perdidos' => 12]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Everton')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 47, 'p_a_favor' => 59, 'p_en_contra' => 55, 'diferencia_p' => 4, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 14, 'p_perdidos' => 13]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Swansea City')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 47, 'p_a_favor' => 42, 'p_en_contra' => 52, 'diferencia_p' => -10, 'partidos_totales' => 38, 'p_ganados' => 12, 'p_empatados' => 11, 'p_perdidos' => 15]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Watford')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 45, 'p_a_favor' => 40, 'p_en_contra' => 50, 'diferencia_p' => -10, 'partidos_totales' => 38, 'p_ganados' => 12, 'p_empatados' => 9, 'p_perdidos' => 17]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'West Bromwich Albion')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 43, 'p_a_favor' => 34, 'p_en_contra' => 48, 'diferencia_p' => -14, 'partidos_totales' => 38, 'p_ganados' => 10, 'p_empatados' => 13, 'p_perdidos' => 15]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Crystal Palace')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 42, 'p_a_favor' => 39, 'p_en_contra' => 51, 'diferencia_p' => -12, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 9, 'p_perdidos' => 18]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'AFC Bournemouth')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 42, 'p_a_favor' => 45, 'p_en_contra' => 57, 'diferencia_p' => -22, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 9, 'p_perdidos' => 18]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Sunderland')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 39, 'p_a_favor' => 48, 'p_en_contra' => 62, 'diferencia_p' => -14, 'partidos_totales' => 38, 'p_ganados' => 9, 'p_empatados' => 12, 'p_perdidos' => 17]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Newcastle')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 37, 'p_a_favor' => 44, 'p_en_contra' => 65, 'diferencia_p' => -21, 'partidos_totales' => 38, 'p_ganados' => 9, 'p_empatados' => 10, 'p_perdidos' => 19]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Norwich City')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 34, 'p_a_favor' => 39, 'p_en_contra' => 67, 'diferencia_p' => -28, 'partidos_totales' => 38, 'p_ganados' => 9, 'p_empatados' => 7, 'p_perdidos' => 22]]);
		array_push($competidores, $competidor->id);
		
		$competidor = luj\Models\Competidor::where('nombre', 'Aston Villa')->first();
		$competidor->grupos()->attach([$gID => ['p_totales' => 17, 'p_a_favor' => 27, 'p_en_contra' => 76, 'diferencia_p' => -49, 'partidos_totales' => 38, 'p_ganados' => 3, 'p_empatados' => 27, 'p_perdidos' => 27]]);
		array_push($competidores, $competidor->id);
		
		$mod->competidores()->attach($competidores);
		
		//******************************* CHAMPIONS LEAGUE 2015-16 *****************************************
		//http://www.marca.com/estadisticas/futbol/champions/2016_17/grupo_1/
		//FASE DE GRUPOS
		$mod = luj\Models\Competicion::where('nombre', 'Champions League')->first()->modalidades()->get();
		$grupos = $mod[0]->grupos()->get();
		$competidores = [];
		//GRUPO A
		$competidor = luj\Models\Competidor::where('nombre', 'Arsenal')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 14, 'p_a_favor' => 18, 'p_en_contra' => 6, 'diferencia_p' => 12, 'partidos_totales' => 6, 'p_ganados' => 4, 'p_empatados' => 2, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'París S.G.')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 12, 'p_a_favor' => 13, 'p_en_contra' => 7, 'diferencia_p' => 6, 'partidos_totales' => 6, 'p_ganados' => 3, 'p_empatados' => 3, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'PFC Ludogorets')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 3, 'p_a_favor' => 6, 'p_en_contra' => 15, 'diferencia_p' => -9, 'partidos_totales' => 6, 'p_ganados' => 0, 'p_empatados' => 3, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'FC Basilea')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 2, 'p_a_favor' => 3, 'p_en_contra' => 12, 'diferencia_p' => -9, 'partidos_totales' => 6, 'p_ganados' => 0, 'p_empatados' => 2, 'p_perdidos' => 4]]);
		array_push($competidores, $competidor->id);
		//GRUPO B
		$competidor = luj\Models\Competidor::where('nombre', 'SSC Nápoles')->first();
		$competidor->grupos()->attach([$grupos[1]->id => ['p_totales' => 11, 'p_a_favor' => 11, 'p_en_contra' => 8, 'diferencia_p' => 3, 'partidos_totales' => 6, 'p_ganados' => 3, 'p_empatados' => 2, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'SL Benfica')->first();
		$competidor->grupos()->attach([$grupos[1]->id => ['p_totales' => 8, 'p_a_favor' => 10, 'p_en_contra' => 10, 'diferencia_p' => 0, 'partidos_totales' => 6, 'p_ganados' => 2, 'p_empatados' => 2, 'p_perdidos' => 2]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Besiktas JK')->first();
		$competidor->grupos()->attach([$grupos[1]->id => ['p_totales' => 7, 'p_a_favor' => 9, 'p_en_contra' => 14, 'diferencia_p' => -5, 'partidos_totales' => 6, 'p_ganados' => 1, 'p_empatados' => 4, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'FC Dinamo Kiev')->first();
		$competidor->grupos()->attach([$grupos[1]->id => ['p_totales' => 5, 'p_a_favor' => 8, 'p_en_contra' => 6, 'diferencia_p' => -2, 'partidos_totales' => 6, 'p_ganados' => 1, 'p_empatados' => 2, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);
		//GRUPO C
		$competidor = luj\Models\Competidor::where('nombre', 'Barcelona')->first();
		$competidor->grupos()->attach([$grupos[2]->id => ['p_totales' => 15, 'p_a_favor' => 20, 'p_en_contra' => 4, 'diferencia_p' => 16, 'partidos_totales' => 6, 'p_ganados' => 5, 'p_empatados' => 0, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'M. City')->first();
		$competidor->grupos()->attach([$grupos[2]->id => ['p_totales' => 9, 'p_a_favor' => 12, 'p_en_contra' => 10, 'diferencia_p' => 2, 'partidos_totales' => 6, 'p_ganados' => 2, 'p_empatados' => 3, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Borussia MG')->first();
		$competidor->grupos()->attach([$grupos[2]->id => ['p_totales' => 5, 'p_a_favor' => 5, 'p_en_contra' => 12, 'diferencia_p' => -7, 'partidos_totales' => 6, 'p_ganados' => 1, 'p_empatados' => 2, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Celtic FC')->first();
		$competidor->grupos()->attach([$grupos[2]->id => ['p_totales' => 3, 'p_a_favor' => 5, 'p_en_contra' => 16, 'diferencia_p' => -11, 'partidos_totales' => 6, 'p_ganados' => 0, 'p_empatados' => 3, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);
		//GRUPO D
		$competidor = luj\Models\Competidor::where('nombre', 'Atlético')->first();
		$competidor->grupos()->attach([$grupos[3]->id => ['p_totales' => 15, 'p_a_favor' => 7, 'p_en_contra' => 2, 'diferencia_p' => 5, 'partidos_totales' => 6, 'p_ganados' => 5, 'p_empatados' => 0, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'B. München')->first();
		$competidor->grupos()->attach([$grupos[3]->id => ['p_totales' => 12, 'p_a_favor' => 14, 'p_en_contra' => 6, 'diferencia_p' => 8, 'partidos_totales' => 6, 'p_ganados' => 4, 'p_empatados' => 0, 'p_perdidos' => 2]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'FC Rostov')->first();
		$competidor->grupos()->attach([$grupos[3]->id => ['p_totales' => 5, 'p_a_favor' => 6, 'p_en_contra' => 12, 'diferencia_p' => -6, 'partidos_totales' => 6, 'p_ganados' => 1, 'p_empatados' => 2, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'PSV Eindhoven')->first();
		$competidor->grupos()->attach([$grupos[3]->id => ['p_totales' => 2, 'p_a_favor' => 4, 'p_en_contra' => 11, 'diferencia_p' => -7, 'partidos_totales' => 6, 'p_ganados' => 0, 'p_empatados' => 2, 'p_perdidos' => 4]]);
		array_push($competidores, $competidor->id);
		//GRUPO E
		$competidor = luj\Models\Competidor::where('nombre', 'AS Mónaco FC')->first();
		$competidor->grupos()->attach([$grupos[4]->id => ['p_totales' => 11, 'p_a_favor' => 9, 'p_en_contra' => 7, 'diferencia_p' => 2, 'partidos_totales' => 6, 'p_ganados' => 3, 'p_empatados' => 2, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'B. Leverkusen')->first();
		$competidor->grupos()->attach([$grupos[4]->id => ['p_totales' => 10, 'p_a_favor' => 8, 'p_en_contra' => 4, 'diferencia_p' => 4, 'partidos_totales' => 6, 'p_ganados' => 2, 'p_empatados' => 4, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'T. Hotspur')->first();
		$competidor->grupos()->attach([$grupos[4]->id => ['p_totales' => 7, 'p_a_favor' => 6, 'p_en_contra' => 6, 'diferencia_p' => 0, 'partidos_totales' => 6, 'p_ganados' => 2, 'p_empatados' => 1, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'CSKA Moscú')->first();
		$competidor->grupos()->attach([$grupos[4]->id => ['p_totales' => 3, 'p_a_favor' => 5, 'p_en_contra' => 11, 'diferencia_p' => -6, 'partidos_totales' => 6, 'p_ganados' => 0, 'p_empatados' => 3, 'p_perdidos' => 3]]);
		array_push($competidores, $competidor->id);
		//GRUPO F
		$competidor = luj\Models\Competidor::where('nombre', 'B. Dortmund')->first();
		$competidor->grupos()->attach([$grupos[5]->id => ['p_totales' => 14, 'p_a_favor' => 21, 'p_en_contra' => 9, 'diferencia_p' => 12, 'partidos_totales' => 6, 'p_ganados' => 4, 'p_empatados' => 2, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'R. Madrid')->first();
		$competidor->grupos()->attach([$grupos[5]->id => ['p_totales' => 12, 'p_a_favor' => 16, 'p_en_contra' => 10, 'diferencia_p' => 6, 'partidos_totales' => 6, 'p_ganados' => 3, 'p_empatados' => 3, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Legia Varsovia')->first();
		$competidor->grupos()->attach([$grupos[5]->id => ['p_totales' => 4, 'p_a_favor' => 4, 'p_en_contra' => 9, 'diferencia_p' => -15, 'partidos_totales' => 6, 'p_ganados' => 1, 'p_empatados' => 1, 'p_perdidos' => 4]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'SC Portugal')->first();
		$competidor->grupos()->attach([$grupos[5]->id => ['p_totales' => 3, 'p_a_favor' => 5, 'p_en_contra' => 5, 'diferencia_p' => -3, 'partidos_totales' => 6, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 5]]);
		array_push($competidores, $competidor->id);
		//GRUPO G
		$competidor = luj\Models\Competidor::where('nombre', 'Leicester City')->first();
		$competidor->grupos()->attach([$grupos[6]->id => ['p_totales' => 13, 'p_a_favor' => 7, 'p_en_contra' => 6, 'diferencia_p' => 1, 'partidos_totales' => 6, 'p_ganados' => 4, 'p_empatados' => 1, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'FC Porto')->first();
		$competidor->grupos()->attach([$grupos[6]->id => ['p_totales' => 11, 'p_a_favor' => 9, 'p_en_contra' => 3, 'diferencia_p' => 6, 'partidos_totales' => 6, 'p_ganados' => 3, 'p_empatados' => 2, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'FC Copenhaguen')->first();
		$competidor->grupos()->attach([$grupos[6]->id => ['p_totales' => 9, 'p_a_favor' => 7, 'p_en_contra' => 2, 'diferencia_p' => 5, 'partidos_totales' => 6, 'p_ganados' => 2, 'p_empatados' => 3, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Club Brujas KV')->first();
		$competidor->grupos()->attach([$grupos[6]->id => ['p_totales' => 0, 'p_a_favor' => 2, 'p_en_contra' => 14, 'diferencia_p' => -12, 'partidos_totales' => 6, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 6]]);
		array_push($competidores, $competidor->id);
		//GRUPO H
		$competidor = luj\Models\Competidor::where('nombre', 'Juventus FC')->first();
		$competidor->grupos()->attach([$grupos[7]->id => ['p_totales' => 14, 'p_a_favor' => 11, 'p_en_contra' => 2, 'diferencia_p' => 9, 'partidos_totales' => 6, 'p_ganados' => 4, 'p_empatados' => 2, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Sevilla')->first();
		$competidor->grupos()->attach([$grupos[7]->id => ['p_totales' => 11, 'p_a_favor' => 7, 'p_en_contra' => 3, 'diferencia_p' => 4, 'partidos_totales' => 6, 'p_ganados' => 3, 'p_empatados' => 2, 'p_perdidos' => 1]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'O. Lyon')->first();
		$competidor->grupos()->attach([$grupos[7]->id => ['p_totales' => 8, 'p_a_favor' => 5, 'p_en_contra' => 3, 'diferencia_p' => 2, 'partidos_totales' => 6, 'p_ganados' => 2, 'p_empatados' => 2, 'p_perdidos' => 2]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'GNK Dinamo Zagreb')->first();
		$competidor->grupos()->attach([$grupos[7]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 15, 'diferencia_p' => -15, 'partidos_totales' => 6, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 6]]);
		array_push($competidores, $competidor->id);

		$mod[0]->competidores()->attach($competidores);
		
		//ELIMINATORIAS
		$grupos = $mod[1]->grupos()->get();
		$competidores = [];
		//OCTAVOS
		$competidor = luj\Models\Competidor::where('nombre', 'R. Madrid')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'SSC Nápoles')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'Sevilla')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Leicester City')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'B. München')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Arsenal')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'B. Leverkusen')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Atlético')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'París S.G.')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Barcelona')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'M. City')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'AS Mónaco FC')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'FC Porto')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);
		$competidor = luj\Models\Competidor::where('nombre', 'Juventus FC')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		array_push($competidores, $competidor->id);

		$competidor = luj\Models\Competidor::where('nombre', 'SL Benfica')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);
		$competidor = luj\Models\Competidor::where('nombre', 'B. Dortmund')->first();
		$competidor->grupos()->attach([$grupos[0]->id => ['p_totales' => 0, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia_p' => 0, 'partidos_totales' => 0, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 0]]);

		$mod[1]->competidores()->attach($competidores);
		*/
		//******************************* ROLAND GARRÓS INVENTADO 2016 *****************************************
		//Dada una fase y un array de competidores elige a los que pasan de ronda
		//num es el numero de competidores que disputan la fase (pj cuartos = 8 competidores)
		//competidores es un array con los competidores
		//equipo es un booleano para competiciónes por parejas o individuales
		function disputaRonda($num, $competidores, $equipo){
			$comp = collect(new luj\Models\Individual);
			if($equipo){
				for($i=0; $i<$num; $i++) {
					$c=rand(0,1);
					if($c==0){
						$comp->push($competidores[$i*4]);
						$comp->push($competidores[$i*4+1]);
					}
					else {
						$comp->push($competidores[$i*4+2]);
						$comp->push($competidores[$i*4+3]);
					}
				}
			}
			else{
				for($i=0; $i<$num; $i++) {
					$c=rand(0,1);
					if($c==0)
						$comp->push($competidores[$i*2]);
					else
						$comp->push($competidores[$i*2+1]);
				}
			}
			return $comp;
		}
		//Dada una coleccion de Individual devuelve un array con los ids de los competidores
		function individualToArray($competidores){
			$comp=[];
			foreach ($competidores as $c) {
				array_push($comp, $c->competidor_id);
			}
			return $comp;
		}

		$tenisH = luj\Models\Individual::where('masculino', true)->get();
		$tenisM = luj\Models\Individual::where('masculino', false)->get();
		$mod = luj\Models\Competicion::where('nombre', 'Roland Garros')->first()->modalidades()->get();

		//*********** INDIVIDUAL MASCULINO
		$competidores = $tenisH->shuffle()->take(8); //shuffle baraja la coleccion, take coge los x primeros items
		$equipo = false;
		$grupos = $mod[0]->grupos()->get();
		//CUARTOS
		$mod[0]->competidores()->attach($competidores);
		$grupos[0]->competidores()->attach($competidores); //grupo id 40
		//SEMIS
		$competidores = disputaRonda(4, $competidores, $equipo);
		$comp = individualToArray($competidores);
		$grupos[1]->competidores()->attach($comp);
		//FINAL
		$competidores = disputaRonda(2, $competidores, $equipo);
		$comp = individualToArray($competidores);
		$grupos[2]->competidores()->attach($comp);

		//*********** INDIVIDUAL FEMENINO
		$competidores = $tenisM->shuffle()->take(8);
		$grupos = $mod[1]->grupos()->get();

		//CUARTOS
		$mod[1]->competidores()->attach($competidores);
		$grupos[0]->competidores()->attach($competidores);
		//SEMIS
		$competidores = disputaRonda(4, $competidores, $equipo);
		$comp = individualToArray($competidores);
		$grupos[1]->competidores()->attach($comp);
		//FINAL
		$competidores = disputaRonda(2, $competidores, $equipo);
		$comp = individualToArray($competidores);
		$grupos[2]->competidores()->attach($comp);

		//*********** DOBLES MASCULINO
		$grupos = $mod[2]->grupos()->get();
		$equipo = true;
		$pais = luj\Models\Pais::where('nombre', 'España')->first();
		$trozo = count(luj\Models\Competidor::where('pais_id',$pais->id)->get())/2;
		
		$competidores = collect(new luj\Models\Individual);
		$necesarios = $tenisH->chunk($trozo)->shuffle()->take(4); //lo divido por paises, barajo los paises y cojo los 4 primeros
		foreach ($necesarios as $g) {
			$temp = $g->shuffle();
			$competidores->push($temp->pull(0));
			$competidores->push($temp->pull(1));
		}
		$comp = individualToArray($competidores);
		//SEMIS
		$mod[2]->competidores()->attach($comp);
		$grupos[0]->competidores()->attach($comp);
		//FINAL
		$competidores = disputaRonda(2, $competidores, $equipo);
		$comp = individualToArray($competidores);
		$grupos[1]->competidores()->attach($comp);

		//*********** DOBLES FEMENINO
		$grupos = $mod[3]->grupos()->get();
		
		$competidores = collect(new luj\Models\Individual);
		$necesarios = $tenisM->chunk($trozo)->shuffle()->take(4); //lo divido por paises, barajo los paises y cojo los 4 primeros
		foreach ($necesarios as $g) {
			$temp = $g->shuffle();
			$competidores->push($temp->pull(0));
			$competidores->push($temp->pull(1));
		}
		$comp = individualToArray($competidores);
		//SEMIS
		$mod[3]->competidores()->attach($comp);
		$grupos[0]->competidores()->attach($comp);
		//FINAL
		$competidores = disputaRonda(2, $competidores, $equipo);
		$comp = individualToArray($competidores);
		$grupos[1]->competidores()->attach($comp);


		//*********** DOBLES MIXTOS
		$grupos = $mod[4]->grupos()->get();
		$hombres = $tenisH->chunk($trozo);
		$mujeres =  $tenisM->chunk($trozo);
		$tam = count($hombres);
		$array = range(0,$tam-1);
		shuffle($array);

		$competidores = collect(new luj\Models\Individual);
		for ($i=0; $i < 4 ; $i++) { 
			$competidores->push($hombres[$array[$i]]->shuffle()[0]);
			$competidores->push($mujeres[$array[$i]]->shuffle()[0]);
		}

		//SEMIS
		$comp = individualToArray($competidores);
		$mod[4]->competidores()->attach($comp);
		$grupos[0]->competidores()->attach($comp);
		//FINAL
		$competidores = disputaRonda(2, $competidores, $equipo);
		$comp = individualToArray($competidores);
		$grupos[1]->competidores()->attach($comp);

		//******************************* COPA DAVIS INVENTADO 2016 *****************************************
		$mod = luj\Models\Competicion::where('nombre', 'Copa Davis')->first()->modalidades()->get();
		$grupos = $mod[0]->grupos()->get();
		$hombres = $hombres->shuffle();
		$competidores = collect(new luj\Models\Individual);
		for ($i=0; $i < 8 ; $i++) { 
			foreach ($hombres[$i] as $c) {
				$competidores->push($c);
			}
		}
		//CUARTOS
		var_dump($grupos[1]->id);
		$comp = individualToArray($competidores);
		$mod[0]->competidores()->attach($comp);
		$grupos[0]->competidores()->attach($comp);
		//SEMIS
		$comp = individualToArray($competidores);
		//$grupos[1]->competidores()->attach($competidores);
		//FINAL
	/*	$competidores = [93, 119];
		$grupos[2]->competidores()->attach($competidores);
		*/
	}
}