<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class TcompeticionTableSeeder extends Seeder {

	public function run() {
		DB::table('tcompeticiones')->truncate();
		$fecha = date("Y-m-d H:i:s");
		$tcompeticiones = [
			[//1
				'nombre' => 'LaLiga',
				'pais_id' => luj\Models\Pais::where('nombre', 'España')->first()->id,
				'deporte_id' => 1,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Liga Santander',
				'pais_id' => luj\Models\Pais::where('nombre', 'España')->first()->id,
				'deporte_id' => 1,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Bundesliga',
				'pais_id' => luj\Models\Pais::where('nombre', 'Alemania')->first()->id,
				'deporte_id' => 1,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Premier League',
				'pais_id' => luj\Models\Pais::where('nombre', 'Inglaterra')->first()->id,
				'deporte_id' => 1,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[//5
				'nombre' => 'Champions League',
				'pais_id' => luj\Models\Pais::where('nombre', 'Internacional Club')->first()->id,
				'deporte_id' => 1,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Euro',
				'pais_id' => luj\Models\Pais::where('nombre', 'Internacional')->first()->id,
				'deporte_id' => 1,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Liga ACB',
				'pais_id' => luj\Models\Pais::where('nombre', 'España')->first()->id,
				'deporte_id' => 2,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'EuroBasket',
				'pais_id' => luj\Models\Pais::where('nombre', 'Internacional')->first()->id,
				'deporte_id' => 2,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[
				'nombre' => 'Roland Garros',
				'pais_id' => luj\Models\Pais::where('nombre', 'Francia')->first()->id,
				'deporte_id' => 3,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
			[//10
				'nombre' => 'Copa Davis',
				'pais_id' => luj\Models\Pais::where('nombre', 'Internacional')->first()->id,
				'deporte_id' => 3,
				'created_at' => $fecha,
				'updated_at' => $fecha
			],
		];
		DB::table('tcompeticiones')->insert($tcompeticiones);
	}
}