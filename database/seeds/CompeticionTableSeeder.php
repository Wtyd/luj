<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class CompeticionTableSeeder extends Seeder {

	public function run() {
		DB::table('competiciones')->truncate();
		$fecha = date("Y-m-d H:i:s");
		$competiciones = [
			//['anyo' => date('Y-m-d', strtotime('01/01/2015')), 'tcompeticion_id' => 4] //Liga ACB 2015
			[
				'nombre' => 'BBVA',
				'logo' => 'bbva.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('08/22/2015')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('05/15/2016')),
				'puntos_vic' => 3,
				'puntos_emp' => 1,
				'puntos_der' => 0,
				'num_modalidades' => 1,
				'secuenciales' => false,				
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'LaLiga')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Santander',
				'logo' => 'santander.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('08/19/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('05/15/2017')),
				'puntos_vic' => 3,
				'puntos_emp' => 1,
				'puntos_der' => 0,
				'num_modalidades' => 1,
				'secuenciales' => false,				
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'LaLiga')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Bundesliga',
				'logo' => 'Bundesliga.png', 
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('08/26/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('05/20/2017')),
				'puntos_vic' => 3,
				'puntos_emp' => 1,
				'puntos_der' => 0,
				'num_modalidades' => 1,
				'secuenciales' => false,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'Bundesliga')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Premier League',
				'logo' => 'Premier.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('08/13/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('05/21/2017')),
				'puntos_vic' => 3,
				'puntos_emp' => 1,
				'puntos_der' => 0,
				'num_modalidades' => 1,
				'secuenciales' => false,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'Premier League')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Champions League',
				'logo' => 'ChampionsLeague.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('10/06/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('06/03/2017')),
				'puntos_vic' => 3,
				'puntos_emp' => 1,
				'puntos_der' => 0,
				'num_modalidades' => 2,
				'secuenciales' => true,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'Champions League')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'UEFA EURO 2016',
				'logo' => 'euro.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('06/10/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('07/10/2016')),
				'puntos_vic' => 3,
				'puntos_emp' => 1,
				'puntos_der' => 0,
				'num_modalidades' => 2,
				'secuenciales' => true,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'Champions League')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Liga Endesa',
				'logo' => 'acb.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('06/10/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('07/10/2017')),
				'puntos_vic' => 1,
				'puntos_emp' => 0,
				'puntos_der' => 0,
				'num_modalidades' => 2,
				'secuenciales' => true,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'Liga ACB')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'EuroBasket',
				'logo' => 'EuroBasket.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('09/05/2015')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('09/20/2015')),
				'puntos_vic' => 2,
				'puntos_emp' => 0,
				'puntos_der' => 1,
				'num_modalidades' => 2,
				'secuenciales' => true,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'EuroBasket')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Roland Garros',
				'logo' => 'RolandGarros.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('06/10/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('07/10/2017')),
				'puntos_vic' => 0,
				'puntos_emp' => 0,
				'puntos_der' => 0,
				'num_modalidades' => 1,
				'secuenciales' => false,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'Roland Garros')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Copa Davis',
				'logo' => 'CopaDavis.png',
				'fecha_inicio' => date("Y-m-d H:i:s", strtotime('06/10/2016')),
				'fecha_fin' => date("Y-m-d H:i:s", strtotime('07/10/2017')),
				'puntos_vic' => 1,
				'puntos_emp' => 0,
				'puntos_der' => 0,
				'num_modalidades' => 1,
				'secuenciales' => false,
				'tcompeticion_id' => luj\Models\Tcompeticion::where('nombre', 'Copa Davis')->first()->id,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
		];

		DB::table('competiciones')->insert($competiciones);

		/*
		DB::table('grupos')->truncate();
		$fecha = date("Y-m-d H:i:s");
		$grupos = [
			['nombre' => 'G Liga BBVA 2014', 'num_jornadas' => 38, 'num_equipos' => 20, 'competicion_id' => 1], //Liga BBVA 2014
			['nombre' => 'G Liga ACB 2014', 'num_jornadas' => 34, 'num_equipos' => 18, 'competicion_id' => 2], //Liga ACB 2014
			['nombre' => 'G Liga BBVA 2015', 'num_jornadas' => 38, 'num_equipos' => 20, 'competicion_id' => 3], //Liga BBVA 2015
			['nombre' => 'G Premier League 2015', 'num_jornadas' => 38, 'num_equipos' => 20, 'competicion_id' => 4] //Premier League 2015
			//['nombre' => 'G Liga ACB 2015', 'num_jornadas' => 34, 'num_equipos' => 20, 'competicion_id' => 4] //Liga ACB 2015
		];

		DB::table('grupos')->insert($grupos);
*/
	}
}