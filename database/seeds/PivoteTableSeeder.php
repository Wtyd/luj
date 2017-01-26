<?php

Class PivoteTableSeeder extends Seeder {

	public function run() {

		DB::table('competicion_equipo')->delete(); //tabla pivote
		//Las entradas estan hechas en varias veces pq muchos inserts de una tacada petan
		$competicion_equipo = [
			//Liga BBVA 2014
			['competicion_id' => 1, 'equipo_id' => 1],
			['competicion_id' => 1, 'equipo_id' => 2],
			['competicion_id' => 1, 'equipo_id' => 3],
			['competicion_id' => 1, 'equipo_id' => 4],
			['competicion_id' => 1, 'equipo_id' => 5],

			['competicion_id' => 1, 'equipo_id' => 6],
			['competicion_id' => 1, 'equipo_id' => 7],
			['competicion_id' => 1, 'equipo_id' => 8],
			['competicion_id' => 1, 'equipo_id' => 9],
			['competicion_id' => 1, 'equipo_id' => 10],

			['competicion_id' => 1, 'equipo_id' => 11],
			['competicion_id' => 1, 'equipo_id' => 12],
			['competicion_id' => 1, 'equipo_id' => 13],
			['competicion_id' => 1, 'equipo_id' => 14],
			['competicion_id' => 1, 'equipo_id' => 15],

			['competicion_id' => 1, 'equipo_id' => 16],
			['competicion_id' => 1, 'equipo_id' => 17],
			['competicion_id' => 1, 'equipo_id' => 18],
			['competicion_id' => 1, 'equipo_id' => 19],
			['competicion_id' => 1, 'equipo_id' => 20],

			//Liga ACB 2014
			['competicion_id' => 2, 'equipo_id' => 28],
			['competicion_id' => 2, 'equipo_id' => 29],
			['competicion_id' => 2, 'equipo_id' => 30],
			['competicion_id' => 2, 'equipo_id' => 31],
			['competicion_id' => 2, 'equipo_id' => 32],

			['competicion_id' => 2, 'equipo_id' => 33],
			['competicion_id' => 2, 'equipo_id' => 34],
			['competicion_id' => 2, 'equipo_id' => 35],
			['competicion_id' => 2, 'equipo_id' => 36],
			['competicion_id' => 2, 'equipo_id' => 37],

			['competicion_id' => 2, 'equipo_id' => 38],
			['competicion_id' => 2, 'equipo_id' => 39],
			['competicion_id' => 2, 'equipo_id' => 40],
			['competicion_id' => 2, 'equipo_id' => 41],
			['competicion_id' => 2, 'equipo_id' => 42],

			['competicion_id' => 2, 'equipo_id' => 43],
			['competicion_id' => 2, 'equipo_id' => 44],
			['competicion_id' => 2, 'equipo_id' => 45]

		];
		DB::table('competicion_equipo')->insert($competicion_equipo);
		$competicion_equipo = [
			//Liga BBVA 2015
			['competicion_id' => 3, 'equipo_id' => 1],
			['competicion_id' => 3, 'equipo_id' => 2],
			['competicion_id' => 3, 'equipo_id' => 3],
			['competicion_id' => 3, 'equipo_id' => 4],
			['competicion_id' => 3, 'equipo_id' => 5],

			['competicion_id' => 3, 'equipo_id' => 6],
			['competicion_id' => 3, 'equipo_id' => 7],
			['competicion_id' => 3, 'equipo_id' => 8],
			['competicion_id' => 3, 'equipo_id' => 9],
			['competicion_id' => 3, 'equipo_id' => 10],

			['competicion_id' => 3, 'equipo_id' => 11],
			['competicion_id' => 3, 'equipo_id' => 12],
			['competicion_id' => 3, 'equipo_id' => 13],
			['competicion_id' => 3, 'equipo_id' => 14],
			['competicion_id' => 3, 'equipo_id' => 15],

			['competicion_id' => 3, 'equipo_id' => 16],
			['competicion_id' => 3, 'equipo_id' => 17],
			['competicion_id' => 3, 'equipo_id' => 21],
			['competicion_id' => 3, 'equipo_id' => 22],
			['competicion_id' => 3, 'equipo_id' => 23],

			//Premier League 2015
			['competicion_id' => 4, 'equipo_id' => 46],
			['competicion_id' => 4, 'equipo_id' => 47],
			['competicion_id' => 4, 'equipo_id' => 48],
			['competicion_id' => 4, 'equipo_id' => 49],
			['competicion_id' => 4, 'equipo_id' => 50],

			['competicion_id' => 4, 'equipo_id' => 51],
			['competicion_id' => 4, 'equipo_id' => 52],
			['competicion_id' => 4, 'equipo_id' => 53],
			['competicion_id' => 4, 'equipo_id' => 54],
			['competicion_id' => 4, 'equipo_id' => 55],

			['competicion_id' => 4, 'equipo_id' => 56],
			['competicion_id' => 4, 'equipo_id' => 57],
			['competicion_id' => 4, 'equipo_id' => 58],
			['competicion_id' => 4, 'equipo_id' => 59],
			['competicion_id' => 4, 'equipo_id' => 60],

			['competicion_id' => 4, 'equipo_id' => 61],
			['competicion_id' => 4, 'equipo_id' => 62],
			['competicion_id' => 4, 'equipo_id' => 63],
			['competicion_id' => 4, 'equipo_id' => 64],
			['competicion_id' => 4, 'equipo_id' => 65]
			
	
		];
		DB::table('competicion_equipo')->insert($competicion_equipo);
		
/*	Al dejar solo un grupo por competicion no necesito esta relacion
		DB::table('grupo_jornada')->delete(); //tabla pivote
		$grupo_jor = [
			//Copa del Rey
			['grupo_id' => 1, 'jornada_id' => 1],
			['grupo_id' => 2, 'jornada_id' => 2],
			['grupo_id' => 3, 'jornada_id' => 3],
			['grupo_id' => 4, 'jornada_id' => 4],
			['grupo_id' => 5, 'jornada_id' => 5],
			['grupo_id' => 6, 'jornada_id' => 6],
			['grupo_id' => 7, 'jornada_id' => 7],

			//Liga BBVA
			['grupo_id' => 8, 'jornada_id' => 8],
			['grupo_id' => 8, 'jornada_id' => 9],
			['grupo_id' => 8, 'jornada_id' => 10],
			['grupo_id' => 8, 'jornada_id' => 11],
			['grupo_id' => 8, 'jornada_id' => 12],

			['grupo_id' => 8, 'jornada_id' => 13],
			['grupo_id' => 8, 'jornada_id' => 14],
			['grupo_id' => 8, 'jornada_id' => 15],
			['grupo_id' => 8, 'jornada_id' => 16],
			['grupo_id' => 8, 'jornada_id' => 17]
		];
		DB::table('grupo_jornada')->insert($grupo_jor);
*/
		/* Conforme esta planteado esta tabla podria ser entre competiciones y equipos
		pero asi ya esta preaparado para cuando las competiciones puedan tener mas de
		un grupo */

	}
}