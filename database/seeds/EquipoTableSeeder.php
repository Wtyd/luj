<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class EquipoTableSeeder extends Seeder
{

	/* Se crearán los equipos en 3 pasos:
		1- Mediante factory se crea el competidor y su equipo.
	*/
    public function run()
    {
    	DB::table('competidores')->truncate();
        DB::table('equipos')->truncate();
        $fecha = date("Y-m-d H:i:s");
        //strtoupper(substr('string',0,3)) obtiene los 3 primeros caracteres de un string y los pasa a mayuscula
/*
		//No funciona pq itera en todas las entradas de la BD
		factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Ath. Bilbao', 'imagen' => 'AthleticBilbao.png', 'pais_id' => 1, 'deporte_id' => 1])->each(function ($u) {
                $u->equipo()->save(factory(luj\Models\Equipo::class)->create([
                	'acronimo' => 'ATB'
                	]));
            });

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Atl. Madrid', 'imagen' => 'AtleticoMadrid.png', 'pais_id' => 1, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create([
        	'competidor_id' => $comp->id,
			'acronimo' => 'ATM']); 
	*/
		//******************************** FUTBOL ESPAÑA ********************************
	 	$pais = luj\Models\Pais::where('nombre', 'España')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Alavés', 'imagen' => 'Alaves.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ALV']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Albacete', 'imagen' => 'Albacete.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ALB']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Alcoyano', 'imagen' => 'Alcoyano.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ALC']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Almeria', 'imagen' => 'Almeria.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ALM']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Athletic', 'imagen' => 'Athletic.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ATB']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Atlético', 'imagen' => 'Atletico.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ATM']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Betis', 'imagen' => 'Betis.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BET']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Barcelona', 'imagen' => 'Barcelona.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'FCB']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Celta', 'imagen' => 'Celta.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'CEL']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Córdoba', 'imagen' => 'Cordoba.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'COR']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Deportivo', 'imagen' => 'Deportivo.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'DEP']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Eibar', 'imagen' => 'Eibar.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'EIB']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Elche', 'imagen' => 'Elche.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ELC']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Espanyol', 'imagen' => 'Espanyol.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ESP']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Getafe', 'imagen' => 'Getafe.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'GET']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Granada', 'imagen' => 'Granada.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'GRA']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Granada', 'imagen' => 'Granada.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'GRA']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Las Palmas', 'imagen' => 'LasPalmas.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'PAL']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Levante', 'imagen' => 'Levante.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'LEV']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Leganés', 'imagen' => 'Leganes.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'LEG']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Málaga', 'imagen' => 'Malaga.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'MAL']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Osasuna', 'imagen' => 'Osasuna.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'OSA']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Rayo', 'imagen' => 'Rayo.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'RVM']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'R. Madrid', 'imagen' => 'RMadrid.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'RMD']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'R. Sociedad', 'imagen' => 'RSociedad.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'RSO']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sevilla', 'imagen' => 'Sevilla.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SEV']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sabadell', 'imagen' => 'Sabadell.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SAB']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sporting', 'imagen' => 'Sporting.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SPO']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Valencia', 'imagen' => 'Valencia.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'VFC']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Villarreal', 'imagen' => 'Villarreal.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'VIL']);
        
		//******************************** BALONCESTO ESPAÑA ********************************
		$comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Andorra', 'imagen' => 'Andorra.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'AND']);

		$comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Barcelona', 'imagen' => 'Barcelona.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BCN']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Baskonia', 'imagen' => 'Baskonia.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BSK']);

		$comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Bilbao Basket', 'imagen' => 'Bilbao.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BIL']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Estudiantes', 'imagen' => 'Estudiantes.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'EST']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Fuenlabrada', 'imagen' => 'Fuenlabrada.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'FUE']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Gran Canaria', 'imagen' => 'GranCanaria.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'GCA']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Guipuzkoa Basket', 'imagen' => 'Guipuzkoa.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'GIP']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Joventut', 'imagen' => 'Joventut.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'JOV']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Murcia', 'imagen' => 'Murcia.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'MUR']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Obradoiro', 'imagen' => 'Obradoiro.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'OBR']);

		$comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sevilla', 'imagen' => 'Sevilla.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SEV']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Tenerife', 'imagen' => 'Tenerife.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'TEN']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Unicaja', 'imagen' => 'Unicaja.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'UNI']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Zaragoza', 'imagen' => 'Zaragoza.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ZAR']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Valencia Basket', 'imagen' => 'Valencia.png', 'pais_id' => $pais, 'deporte_id' => 2]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'VAL']);

        //******************************** FUTBOL INGLATERRA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Inglaterra')->first()->id;

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Arsenal', 'imagen' => 'Arsenal.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ARS']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Aston Villa', 'imagen' => 'AstonVilla.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'AVI']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Chelsea', 'imagen' => 'Chelsea.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'CHE']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Crystal Palace', 'imagen' => 'Palace.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'CRP']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'AFC Bournemouth', 'imagen' => 'Bournemouth.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BOU']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Everton', 'imagen' => 'Everton.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'EVT']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Leicester City', 'imagen' => 'Leicester.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'LEI']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'M. United', 'imagen' => 'ManUnited.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'MUN']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Newcastle', 'imagen' => 'Newcastle.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'NCT']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Norwich City', 'imagen' => 'Norwich.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'NOR']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Liverpool', 'imagen' => 'Liverpool.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'LIV']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Southampton', 'imagen' => 'Southampton.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SOU']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Stoke City', 'imagen' => 'StokeCity.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'STK']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sunderland', 'imagen' => 'Sunderland.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SUN']);

		$comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Swansea City', 'imagen' => 'SwanseaCity.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SWA']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'T. Hotspur', 'imagen' => 'Hotspur.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'HOT']);

		$comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'West Bromwich Albion', 'imagen' => 'BromwichAlbion.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BRO']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'West Ham', 'imagen' => 'WestHam.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'HAM']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Watford', 'imagen' => 'Watford.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'WAT']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'M. City', 'imagen' => 'ManCity.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'CIT']);

        //******************************** FUTBOL ALEMANIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Alemania')->first()->id;

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'B. Leverkusen', 'imagen' => 'BLeverkusen.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'LVK']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'B. München', 'imagen' => 'BMunchen.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BAY']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Schalke04', 'imagen' => 'Schalke.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SCH']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'W. Bremen', 'imagen' => 'WBremen.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BRE']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Borussia MG', 'imagen' => 'Borussia.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BMG']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'B. Dortmund', 'imagen' => 'Dortmund.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BVB']);

        //******************************** FUTBOL FRANCIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Francia')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'AS Mónaco FC', 'imagen' => 'Monaco.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'MON']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'O. Lyon', 'imagen' => 'Lyon.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'OLY']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'París S.G.', 'imagen' => 'ParisSG.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'SGE']);
        

        //******************************** FUTBOL HOLANDA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Holanda')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Copenhaguen', 'imagen' => 'Copenhaguen.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'FCK']);

        $pais = luj\Models\Pais::where('nombre', 'Holanda')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'PSV Eindhoven', 'imagen' => 'PSV.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'PSV']);

        //******************************** FUTBOL ITALIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Italia')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Juventus FC', 'imagen' => 'Juventus.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'JUV']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'SSC Nápoles', 'imagen' => 'Napoles.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'NAP']);

        //******************************** FUTBOL PORTUGAL ********************************
        $pais = luj\Models\Pais::where('nombre', 'Portugal')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'SL Benfica', 'imagen' => 'Benfica.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BEN']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'SC Portugal', 'imagen' => 'Portugal.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BEN']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Porto', 'imagen' => 'Porto.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'POR']);

        //******************************** FUTBOL RUSIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Rusia')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'CSKA Moscú', 'imagen' => 'Moscu.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'MOS']);

        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Rostov', 'imagen' => 'Rostov.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'ROS']);

        //******************************** FUTBOL TURQUÍA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Turquía')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Besiktas JK', 'imagen' => 'Besiktas.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BES']);

        //******************************** FUTBOL OTROS ********************************
        $pais = luj\Models\Pais::where('nombre', 'Bulgaria')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'PFC Ludogorets', 'imagen' => 'Ludogorets.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'LUD']);

        $pais = luj\Models\Pais::where('nombre', 'Bélgica')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Club Brujas KV', 'imagen' => 'Brujas.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BRU']);

        $pais = luj\Models\Pais::where('nombre', 'Escocia')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Celtic FC', 'imagen' => 'Celtic.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'CEL']);

        $pais = luj\Models\Pais::where('nombre', 'Polonia')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Legia Varsovia', 'imagen' => 'Varsovia.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'LVA']);

        $pais = luj\Models\Pais::where('nombre', 'Rumania')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Dinamo Kiev', 'imagen' => 'Dinamo.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'DIK']);

        $pais = luj\Models\Pais::where('nombre', 'Serbia')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'GNK Dinamo Zagreb', 'imagen' => 'Dinamo.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'DIN']);

        $pais = luj\Models\Pais::where('nombre', 'Suiza')->first()->id;
        $comp=factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Basilea', 'imagen' => 'Basilea.png', 'pais_id' => $pais, 'deporte_id' => 1]);
        factory(luj\Models\Equipo::class)->create(['competidor_id' => $comp->id,'acronimo' => 'BAS']);

        

        

		//FUNCION
		//Crea una seleccion para cada pais y deporte que exista en la BD
		/*
		$paises = luj\Models\Pais::all();
		$deportes = luj\Models\Deporte::all();
		foreach ($paises as $p) {
			foreach ($deportes as $d) {
				$comp=factory(luj\Models\Competidor::class)->create([
					'nombre' => $p->nombre, 'imagen' => null, 'pais_id' => $p->id, 'deporte_id' => $d->id]);
        		factory(luj\Models\Equipo::class)->create([
		        	'competidor_id' => $comp->id,
					'acronimo' => $p->nombre_corto,
					'seleccion' =>  true]);
			}		
		}
		*/
		
    }
}
