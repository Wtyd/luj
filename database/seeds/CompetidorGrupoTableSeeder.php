<?php

Class CompetidorGrupoTableSeeder extends Seeder {

	public function run() {

		/* Conforme esta planteado esta tabla podria ser entre competiciones y equipos
		pero asi ya esta preparado para cuando las competiciones puedan tener mas de
		un grupo */
		//Aunque todos los datos son de la misma tabla tengo que dividir el insert por competiciones pq es una sentencia muy grande y peta
		DB::table('equipo_grupo')->delete(); //tabla pivote
		$equipo_grupo = [
			//Grupo BBVA 2014
			//['equipo_id' => 1, 'grupo_id' => 1, 'puntuacion' => , 'p_a_favor' => , 'p_en_contra' => , 'diferencia' => , 'partidos_totales' => , 'partidos_casa' => , 'partidos_fuera' => ],
			['equipo_id' => 1, 'grupo_id' => 1, 'puntuacion' => 55, 'p_a_favor' => 42, 'p_en_contra' => 41, 'diferencia' => 1, 'partidos_totales' => 38, 'p_ganados' => 15, 'p_empatados' => 10, 'p_perdidos' => 13],
			['equipo_id' => 2, 'grupo_id' => 1, 'puntuacion' => 78, 'p_a_favor' => 67, 'p_en_contra' => 29, 'diferencia' => 38, 'partidos_totales' => 38, 'p_ganados' => 23, 'p_empatados' => 9, 'p_perdidos' => 6],
			['equipo_id' => 3, 'grupo_id' => 1, 'puntuacion' => 94, 'p_a_favor' => 110, 'p_en_contra' => 21, 'diferencia' => 89, 'partidos_totales' => 38, 'p_ganados' => 30, 'p_empatados' => 4, 'p_perdidos' => 4],
			['equipo_id' => 4, 'grupo_id' => 1, 'puntuacion' => 35, 'p_a_favor' => 35, 'p_en_contra' => 60, 'diferencia' => -25, 'partidos_totales' => 38, 'p_ganados' => 7, 'p_empatados' => 14, 'p_perdidos' => 17],
			['equipo_id' => 5, 'grupo_id' => 1, 'puntuacion' => 51, 'p_a_favor' => 47, 'p_en_contra' => 48, 'diferencia' => -1, 'partidos_totales' => 38, 'p_ganados' => 13, 'p_empatados' => 12, 'p_perdidos' => 13],

			['equipo_id' => 6, 'grupo_id' => 1, 'puntuacion' => 35, 'p_a_favor' => 34, 'p_en_contra' => 55, 'diferencia' => -21, 'partidos_totales' => 38, 'p_ganados' => 9, 'p_empatados' => 8, 'p_perdidos' => 21],
			['equipo_id' => 7, 'grupo_id' => 1, 'puntuacion' => 49, 'p_a_favor' => 47, 'p_en_contra' => 51, 'diferencia' => -4, 'partidos_totales' => 38, 'p_ganados' => 13, 'p_empatados' => 10, 'p_perdidos' => 15],
			['equipo_id' => 8, 'grupo_id' => 1, 'puntuacion' => 37, 'p_a_favor' => 33, 'p_en_contra' => 64, 'diferencia' => -33, 'partidos_totales' => 38, 'p_ganados' => 9, 'p_empatados' => 10, 'p_perdidos' => 19],
			['equipo_id' => 9, 'grupo_id' => 1, 'puntuacion' => 35, 'p_a_favor' => 29, 'p_en_contra' => 64, 'diferencia' => -35, 'partidos_totales' => 38, 'p_ganados' => 7, 'p_empatados' => 14, 'p_perdidos' => 17],
			['equipo_id' => 10, 'grupo_id' => 1, 'puntuacion' => 37, 'p_a_favor' => 34, 'p_en_contra' => 67, 'diferencia' => -31, 'partidos_totales' => 38, 'p_ganados' => 10, 'p_empatados' => 7, 'p_perdidos' => 21],

			['equipo_id' => 11, 'grupo_id' => 1, 'puntuacion' => 50, 'p_a_favor' => 42, 'p_en_contra' => 48, 'diferencia' => -6, 'partidos_totales' => 38, 'p_ganados' => 14, 'p_empatados' => 8, 'p_perdidos' => 16],
			['equipo_id' => 12, 'grupo_id' => 1, 'puntuacion' => 49, 'p_a_favor' => 46, 'p_en_contra' => 68, 'diferencia' => -22, 'partidos_totales' => 38, 'p_ganados' => 15, 'p_empatados' => 4, 'p_perdidos' => 19],
			['equipo_id' => 13, 'grupo_id' => 1, 'puntuacion' => 92, 'p_a_favor' => 118, 'p_en_contra' => 38, 'diferencia' => 80, 'partidos_totales' => 38, 'p_ganados' => 30, 'p_empatados' => 2, 'p_perdidos' => 6],
			['equipo_id' => 14, 'grupo_id' => 1, 'puntuacion' => 46, 'p_a_favor' => 44, 'p_en_contra' => 51, 'diferencia' => -7, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 13, 'p_perdidos' => 14],
			['equipo_id' => 15, 'grupo_id' => 1, 'puntuacion' => 76, 'p_a_favor' => 71, 'p_en_contra' => 45, 'diferencia' => 26, 'partidos_totales' => 38, 'p_ganados' => 23, 'p_empatados' => 7, 'p_perdidos' => 8],

			['equipo_id' => 16, 'grupo_id' => 1, 'puntuacion' => 77, 'p_a_favor' => 70, 'p_en_contra' => 32, 'diferencia' => 38, 'partidos_totales' => 38, 'p_ganados' => 22, 'p_empatados' => 11, 'p_perdidos' => 5],
			['equipo_id' => 17, 'grupo_id' => 1, 'puntuacion' => 60, 'p_a_favor' => 48, 'p_en_contra' => 37, 'diferencia' => 11, 'partidos_totales' => 38, 'p_ganados' => 16, 'p_empatados' => 12, 'p_perdidos' => 10],
			['equipo_id' => 18, 'grupo_id' => 1, 'puntuacion' => 29, 'p_a_favor' => 35, 'p_en_contra' => 64, 'diferencia' => -29, 'partidos_totales' => 38, 'p_ganados' => 8, 'p_empatados' => 8, 'p_perdidos' => 22],
			['equipo_id' => 19, 'grupo_id' => 1, 'puntuacion' => 20, 'p_a_favor' => 22, 'p_en_contra' => 68, 'diferencia' => -46, 'partidos_totales' => 38, 'p_ganados' => 3, 'p_empatados' => 11, 'p_perdidos' => 24],
			['equipo_id' => 20, 'grupo_id' => 1, 'puntuacion' => 41, 'p_a_favor' => 35, 'p_en_contra' => 62, 'diferencia' => -27, 'partidos_totales' => 38, 'p_ganados' => 11, 'p_empatados' => 8, 'p_perdidos' => 19],
		];
		DB::table('equipo_grupo')->insert($equipo_grupo);

		$equipo_grupo = [
			//Grupo ACB 2014
			//punticion = p_ganados, no se pueden empatar partidos (p_empatados = 0)
			['equipo_id' => 28, 'grupo_id' => 2, 'puntuacion' => 12, 'p_a_favor' => 2539, 'p_en_contra' => 2743, 'diferencia' => -204, 'partidos_totales' => 34, 'p_ganados' => 12, 'p_empatados' => 0, 'p_perdidos' => 22],
			['equipo_id' => 29, 'grupo_id' => 2, 'puntuacion' => 18, 'p_a_favor' => 2584, 'p_en_contra' => 2643, 'diferencia' => -59, 'partidos_totales' => 34, 'p_ganados' => 18, 'p_empatados' => 0, 'p_perdidos' => 16],
			['equipo_id' => 30, 'grupo_id' => 2, 'puntuacion' => 20, 'p_a_favor' => 2652, 'p_en_contra' => 2608, 'diferencia' => 44, 'partidos_totales' => 34, 'p_ganados' => 20, 'p_empatados' => 0, 'p_perdidos' => 14],
			['equipo_id' => 31, 'grupo_id' => 2, 'puntuacion' => 25, 'p_a_favor' => 2806, 'p_en_contra' => 2455, 'diferencia' => 263, 'partidos_totales' => 34, 'p_ganados' => 25, 'p_empatados' => 0, 'p_perdidos' => 9],
			['equipo_id' => 32, 'grupo_id' => 2, 'puntuacion' => 19, 'p_a_favor' => 2652, 'p_en_contra' => 2624, 'diferencia' => 28, 'partidos_totales' => 34, 'p_ganados' => 19, 'p_empatados' => 0, 'p_perdidos' => 15],

			['equipo_id' => 33, 'grupo_id' => 2, 'puntuacion' => 11, 'p_a_favor' => 2456, 'p_en_contra' => 2672, 'diferencia' => -216, 'partidos_totales' => 34, 'p_ganados' => 11, 'p_empatados' => 0, 'p_perdidos' => 23],
			['equipo_id' => 34, 'grupo_id' => 2, 'puntuacion' => 10, 'p_a_favor' => 2409, 'p_en_contra' => 2648, 'diferencia' => -239, 'partidos_totales' => 34, 'p_ganados' => 10, 'p_empatados' => 0, 'p_perdidos' => 24],
			['equipo_id' => 35, 'grupo_id' => 2, 'puntuacion' => 17, 'p_a_favor' => 2621, 'p_en_contra' => 2660, 'diferencia' => -32, 'partidos_totales' => 34, 'p_ganados' => 17, 'p_empatados' => 0, 'p_perdidos' => 17],
			['equipo_id' => 36, 'grupo_id' => 2, 'puntuacion' => 16, 'p_a_favor' => 2651, 'p_en_contra' => 2619, 'diferencia' => 165, 'partidos_totales' => 34, 'p_ganados' => 16, 'p_empatados' => 0, 'p_perdidos' => 18],
			['equipo_id' => 37, 'grupo_id' => 2, 'puntuacion' => 11, 'p_a_favor' => 2456, 'p_en_contra' => 2672, 'diferencia' => -216, 'partidos_totales' => 34, 'p_ganados' => 11, 'p_empatados' => 0, 'p_perdidos' => 23],

			['equipo_id' => 38, 'grupo_id' => 2, 'puntuacion' => 8, 'p_a_favor' => 2533, 'p_en_contra' => 2718, 'diferencia' => -185, 'partidos_totales' => 34, 'p_ganados' => 8, 'p_empatados' => 0, 'p_perdidos' => 26],
			['equipo_id' => 39, 'grupo_id' => 2, 'puntuacion' => 12, 'p_a_favor' => 2549, 'p_en_contra' => 2615, 'diferencia' => -66, 'partidos_totales' => 34, 'p_ganados' => 12, 'p_empatados' => 0, 'p_perdidos' => 22],
			['equipo_id' => 40, 'grupo_id' => 2, 'puntuacion' => 14, 'p_a_favor' => 2509, 'p_en_contra' => 2615, 'diferencia' => -106, 'partidos_totales' => 34, 'p_ganados' => 14, 'p_empatados' => 0, 'p_perdidos' => 20],
			['equipo_id' => 41, 'grupo_id' => 2, 'puntuacion' => 27, 'p_a_favor' => 2903, 'p_en_contra' => 2640, 'diferencia' => 351, 'partidos_totales' => 34, 'p_ganados' => 27, 'p_empatados' => 0, 'p_perdidos' => 7],
			['equipo_id' => 42, 'grupo_id' => 2, 'puntuacion' => 15, 'p_a_favor' => 2467, 'p_en_contra' => 2535, 'diferencia' => -68, 'partidos_totales' => 34, 'p_ganados' => 15, 'p_empatados' => 0, 'p_perdidos' => 19],

			['equipo_id' => 43, 'grupo_id' => 2, 'puntuacion' => 17, 'p_a_favor' => 2621, 'p_en_contra' => 2660, 'diferencia' => -39, 'partidos_totales' => 34, 'p_ganados' => 17, 'p_empatados' => 0, 'p_perdidos' => 17],
			['equipo_id' => 44, 'grupo_id' => 2, 'puntuacion' => 25, 'p_a_favor' => 2738, 'p_en_contra' => 2583, 'diferencia' => 155, 'partidos_totales' => 34, 'p_ganados' => 25, 'p_empatados' => 0, 'p_perdidos' => 9],
			['equipo_id' => 45, 'grupo_id' => 2, 'puntuacion' => 20, 'p_a_favor' => 2817, 'p_en_contra' => 2675, 'diferencia' => 142, 'partidos_totales' => 34, 'p_ganados' => 20, 'p_empatados' => 0, 'p_perdidos' => 14]

		];
		DB::table('equipo_grupo')->insert($equipo_grupo);

		$equipo_grupo = [
			//Grupo BBVA 2015
			['equipo_id' => 1, 'grupo_id' => 3, 'puntuacion' => 0, 'p_a_favor' => 0, 'p_en_contra' => 3, 'diferencia' => -3, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 2],
			['equipo_id' => 2, 'grupo_id' => 3, 'puntuacion' => 6, 'p_a_favor' => 4, 'p_en_contra' => 0, 'diferencia' => 4, 'partidos_totales' => 2, 'p_ganados' => 2, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 3, 'grupo_id' => 3, 'puntuacion' => 6, 'p_a_favor' => 2, 'p_en_contra' => 0, 'diferencia' => 2, 'partidos_totales' => 2, 'p_ganados' => 2, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 4, 'grupo_id' => 3, 'puntuacion' => 6, 'p_a_favor' => 5, 'p_en_contra' => 1, 'diferencia' => 4, 'partidos_totales' => 2, 'p_ganados' => 2, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 5, 'grupo_id' => 3, 'puntuacion' => 2, 'p_a_favor' => 1, 'p_en_contra' => 1, 'diferencia' => 0, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 2, 'p_perdidos' => 0],

			['equipo_id' => 6, 'grupo_id' => 3, 'puntuacion' => 6, 'p_a_favor' => 5, 'p_en_contra' => 1, 'diferencia' => 4, 'partidos_totales' => 2, 'p_ganados' => 2, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 7, 'grupo_id' => 3, 'puntuacion' => 3, 'p_a_favor' => 2, 'p_en_contra' => 3, 'diferencia' => -1, 'partidos_totales' => 2, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 1],
			['equipo_id' => 8, 'grupo_id' => 3, 'puntuacion' => 0, 'p_a_favor' => 1, 'p_en_contra' => 3, 'diferencia' => -2, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 2],
			['equipo_id' => 9, 'grupo_id' => 3, 'puntuacion' => 3, 'p_a_favor' => 3, 'p_en_contra' => 4, 'diferencia' => -1, 'partidos_totales' => 2, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 1],
			['equipo_id' => 10, 'grupo_id' => 3, 'puntuacion' => 1, 'p_a_favor' => 1, 'p_en_contra' => 2, 'diferencia' => -1, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 1],

			['equipo_id' => 11, 'grupo_id' => 3, 'puntuacion' => 1, 'p_a_favor' => 0, 'p_en_contra' => 1, 'diferencia' => -1, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 1],
			['equipo_id' => 12, 'grupo_id' => 3, 'puntuacion' => 1, 'p_a_favor' => 0, 'p_en_contra' => 3, 'diferencia' => -3, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 1],
			['equipo_id' => 13, 'grupo_id' => 3, 'puntuacion' => 4, 'p_a_favor' => 5, 'p_en_contra' => 0, 'diferencia' => 5, 'partidos_totales' => 2, 'p_ganados' => 1, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 14, 'grupo_id' => 3, 'puntuacion' => 2, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia' => 0, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 2, 'p_perdidos' => 0],
			['equipo_id' => 15, 'grupo_id' => 3, 'puntuacion' => 1, 'p_a_favor' => 0, 'p_en_contra' => 3, 'diferencia' => -3, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 1],

			['equipo_id' => 16, 'grupo_id' => 3, 'puntuacion' => 2, 'p_a_favor' => 1, 'p_en_contra' => 1, 'diferencia' => 0, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 2, 'p_perdidos' => 0],
			['equipo_id' => 17, 'grupo_id' => 3, 'puntuacion' => 4, 'p_a_favor' => 4, 'p_en_contra' => 2, 'diferencia' => 2, 'partidos_totales' => 2, 'p_ganados' => 1, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 21, 'grupo_id' => 3, 'puntuacion' => 2, 'p_a_favor' => 1, 'p_en_contra' => 0, 'diferencia' => 1, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 2, 'p_perdidos' => 0],
			['equipo_id' => 22, 'grupo_id' => 3, 'puntuacion' => 2, 'p_a_favor' => 0, 'p_en_contra' => 0, 'diferencia' => 0, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 2, 'p_perdidos' => 0],
			['equipo_id' => 23, 'grupo_id' => 3, 'puntuacion' => 1, 'p_a_favor' => 1, 'p_en_contra' => 6, 'diferencia' => -5, 'partidos_totales' => 2, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 1],

			//Premier League 2015
			['equipo_id' => 46, 'grupo_id' => 4, 'puntuacion' => 3, 'p_a_favor' => 1, 'p_en_contra' => 0, 'diferencia' => 1, 'partidos_totales' => 1, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 47, 'grupo_id' => 4, 'puntuacion' => 0, 'p_a_favor' => 0, 'p_en_contra' => 1, 'diferencia' => -1, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 1],
			['equipo_id' => 48, 'grupo_id' => 4, 'puntuacion' => 3, 'p_a_favor' => 4, 'p_en_contra' => 2, 'diferencia' => 2, 'partidos_totales' => 1, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 49, 'grupo_id' => 4, 'puntuacion' => 0, 'p_a_favor' => 2, 'p_en_contra' => 4, 'diferencia' => -2, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 1],
			['equipo_id' => 50, 'grupo_id' => 4, 'puntuacion' => 0, 'p_a_favor' => 1, 'p_en_contra' => 3, 'diferencia' => -2, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 1],

			['equipo_id' => 51, 'grupo_id' => 4, 'puntuacion' => 3, 'p_a_favor' => 3, 'p_en_contra' => 1, 'diferencia' => 2, 'partidos_totales' => 1, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 52, 'grupo_id' => 4, 'puntuacion' => 1, 'p_a_favor' => 2, 'p_en_contra' => 2, 'diferencia' => 0, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 53, 'grupo_id' => 4, 'puntuacion' => 1, 'p_a_favor' => 2, 'p_en_contra' => 2, 'diferencia' => 0, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 54, 'grupo_id' => 4, 'puntuacion' => 0, 'p_a_favor' => 0, 'p_en_contra' => 1, 'diferencia' => -1, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 1],
			['equipo_id' => 55, 'grupo_id' => 4, 'puntuacion' => 3, 'p_a_favor' => 1, 'p_en_contra' => 0, 'diferencia' => 1, 'partidos_totales' => 1, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 0],

			['equipo_id' => 56, 'grupo_id' => 4, 'puntuacion' => 1, 'p_a_favor' => 2, 'p_en_contra' => 2, 'diferencia' => 0, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 57, 'grupo_id' => 4, 'puntuacion' => 1, 'p_a_favor' => 2, 'p_en_contra' => 2, 'diferencia' => 0, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 58, 'grupo_id' => 4, 'puntuacion' => 1, 'p_a_favor' => 2, 'p_en_contra' => 2, 'diferencia' => 0, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 59, 'grupo_id' => 4, 'puntuacion' => 1, 'p_a_favor' => 2, 'p_en_contra' => 2, 'diferencia' => 0, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 1, 'p_perdidos' => 0],
			['equipo_id' => 60, 'grupo_id' => 4, 'puntuacion' => 0, 'p_a_favor' => 0, 'p_en_contra' => 2, 'diferencia' => -2, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 1],

			['equipo_id' => 61, 'grupo_id' => 4, 'puntuacion' => 3, 'p_a_favor' => 2, 'p_en_contra' => 0, 'diferencia' => 2, 'partidos_totales' => 1, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 62, 'grupo_id' => 4, 'puntuacion' => 0, 'p_a_favor' => 0, 'p_en_contra' => 1, 'diferencia' => -1, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 1],
			['equipo_id' => 63, 'grupo_id' => 4, 'puntuacion' => 3, 'p_a_favor' => 1, 'p_en_contra' => 0, 'diferencia' => 1, 'partidos_totales' => 1, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 0],
			['equipo_id' => 64, 'grupo_id' => 4, 'puntuacion' => 0, 'p_a_favor' => 0, 'p_en_contra' => 3, 'diferencia' => -3, 'partidos_totales' => 1, 'p_ganados' => 0, 'p_empatados' => 0, 'p_perdidos' => 1],
			['equipo_id' => 65, 'grupo_id' => 4, 'puntuacion' => 3, 'p_a_favor' => 3, 'p_en_contra' => 0, 'diferencia' => 3, 'partidos_totales' => 1, 'p_ganados' => 1, 'p_empatados' => 0, 'p_perdidos' => 0]
			
			//Grupo ACB 2015
			/*['equipo_id' => 28, 'grupo_id' => 4],
			['equipo_id' => 29, 'grupo_id' => 4],
			['equipo_id' => 30, 'grupo_id' => 4],
			['equipo_id' => 31, 'grupo_id' => 4],
			['equipo_id' => 32, 'grupo_id' => 4],

			['equipo_id' => 33, 'grupo_id' => 4],
			['equipo_id' => 34, 'grupo_id' => 4],
			['equipo_id' => 35, 'grupo_id' => 4],
			['equipo_id' => 36, 'grupo_id' => 4],
			['equipo_id' => 37, 'grupo_id' => 4],

			['equipo_id' => 38, 'grupo_id' => 4],
			['equipo_id' => 39, 'grupo_id' => 4],
			['equipo_id' => 40, 'grupo_id' => 4],
			['equipo_id' => 41, 'grupo_id' => 4],
			['equipo_id' => 42, 'grupo_id' => 4],

			['equipo_id' => 43, 'grupo_id' => 4],
			['equipo_id' => 44, 'grupo_id' => 4],
			['equipo_id' => 45, 'grupo_id' => 4],*/
		
		];
		DB::table('equipo_grupo')->insert($equipo_grupo);

	}
}