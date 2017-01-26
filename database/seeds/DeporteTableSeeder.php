<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class DeporteTableSeeder extends Seeder {

	public function run() {

		DB::table('deportes')->truncate();
		$fecha = date("Y-m-d H:i:s");
		$deportes = [
			['nombre' => 'Fútbol', 'icono' => 'futbol.png', 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Baloncesto', 'icono' => 'baloncesto.png', 'created_at' => $fecha, 'updated_at' => $fecha],
			['nombre' => 'Tenis', 'icono' => 'deporte.png', 'created_at' => $fecha, 'updated_at' => $fecha]
		];
		DB::table('deportes')->insert($deportes);
/*
		$faker->dateTimeThisMonth()->format('Y-m-d H:i:s')
		'created_at' => date("Y-m-d H:i:s")
*/
	}
}