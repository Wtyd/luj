<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class EquipoTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('competidores')->truncate();
        DB::table('equipos')->truncate();

        $fecha = date("Y-m-d H:i:s");
        //strtoupper(substr('string',0,3)) obtiene los 3 primeros caracteres de un string y los pasa a mayuscula
         /* Pruebo la relacion polimorfica
        $equipo = luj\Models\Equipo::find(1); 
        var_dump("Equipo: ".$equipo->competidor->id." ".$equipo->competidor->nombre);
        $c = luj\Models\Competidor::find(1); 
        var_dump("Competidor: ".$c->competible->id." ".$c->competible->acronimo);

        $equipos = luj\Models\Equipo::all();
        foreach ($equipos as $e) {
            $competidor = $e->competidor;
            var_dump($competidor->nombre);
        }

        Esta version es mas directa pero no le puedo meter variables como el pais
        factory(luj\Models\Equipo::class)->create([
            'acronimo' => 'ALV'
            ])->each(function ($u) {
            $u->competidor()->save(factory(luj\Models\Competidor::class)->create([
                'nombre' => 'Alavés', 'imagen' => 'Alaves.png', 'deporte_id' => 1, 'competible_type' => 'luj\Models\Equipo', 'pais_id' => luj\Models\Pais::where('nombre', 'España')->first()->id
                ]));
        });
        */

		//******************************** FUTBOL ESPAÑA ********************************
        $pais = luj\Models\Pais::where('nombre', 'España')->first()->id;
        
        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ALV']);
        factory(luj\Models\Competidor::class)->create([
            'nombre' => 'Alavés', 'imagen' => 'Alaves.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);
       
        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ALB']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Albacete', 'imagen' => 'Albacete.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);
        
        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ALC']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Alcoyano', 'imagen' => 'Alcoyano.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ALM']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Almeria', 'imagen' => 'Almeria.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ATB']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Athletic', 'imagen' => 'Athletic.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ATM']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Atlético', 'imagen' => 'Atletico.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BET']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Betis', 'imagen' => 'Betis.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'FCB']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Barcelona', 'imagen' => 'Barcelona.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'CEL']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Celta', 'imagen' => 'Celta.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'COR']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Córdoba', 'imagen' => 'Cordoba.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'DEP']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Deportivo', 'imagen' => 'Deportivo.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'EIB']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Eibar', 'imagen' => 'Eibar.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ELC']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Elche', 'imagen' => 'Elche.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ESP']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Espanyol', 'imagen' => 'Espanyol.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'GET']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Getafe', 'imagen' => 'Getafe.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'GRA']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Granada', 'imagen' => 'Granada.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'GRA']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Granada', 'imagen' => 'Granada.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'PAL']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Las Palmas', 'imagen' => 'LasPalmas.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'LEV']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Levante', 'imagen' => 'Levante.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'LEG']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Leganés', 'imagen' => 'Leganes.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'MAL']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Málaga', 'imagen' => 'Malaga.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'OSA']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Osasuna', 'imagen' => 'Osasuna.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'RVM']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Rayo', 'imagen' => 'Rayo.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'RMD']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'R. Madrid', 'imagen' => 'RMadrid.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'RSO']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'R. Sociedad', 'imagen' => 'RSociedad.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SEV']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sevilla', 'imagen' => 'Sevilla.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SAB']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sabadell', 'imagen' => 'Sabadell.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SPO']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sporting', 'imagen' => 'Sporting.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'VFC']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Valencia', 'imagen' => 'Valencia.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'VIL']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Villarreal', 'imagen' => 'Villarreal.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        
     
		//******************************** BALONCESTO ESPAÑA ********************************
		$e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'AND']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Andorra', 'imagen' => 'Andorra.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BCN']);
		factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Barcelona', 'imagen' => 'Barcelona.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);
        
        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BSK']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Baskonia', 'imagen' => 'Baskonia.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);
        
        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BIL']);
		factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Bilbao Basket', 'imagen' => 'Bilbao.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'EST']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Estudiantes', 'imagen' => 'Estudiantes.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'FUE']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Fuenlabrada', 'imagen' => 'Fuenlabrada.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'GCA']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Gran Canaria', 'imagen' => 'GranCanaria.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'GIP']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Guipuzkoa Basket', 'imagen' => 'Guipuzkoa.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'JOV']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Joventut', 'imagen' => 'Joventut.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'MUR']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Murcia', 'imagen' => 'Murcia.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'OBR']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Obradoiro', 'imagen' => 'Obradoiro.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SEV']);
		factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sevilla', 'imagen' => 'Sevilla.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'TEN']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Tenerife', 'imagen' => 'Tenerife.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'UNI']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Unicaja', 'imagen' => 'Unicaja.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ZAR']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Zaragoza', 'imagen' => 'Zaragoza.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'VAL']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Valencia Basket', 'imagen' => 'Valencia.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 2]);

        //******************************** FUTBOL INGLATERRA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Inglaterra')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ARS']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Arsenal', 'imagen' => 'Arsenal.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'AVI']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Aston Villa', 'imagen' => 'AstonVilla.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'CHE']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Chelsea', 'imagen' => 'Chelsea.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'CRP']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Crystal Palace', 'imagen' => 'Palace.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BOU']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'AFC Bournemouth', 'imagen' => 'Bournemouth.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'EVT']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Everton', 'imagen' => 'Everton.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'LEI']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Leicester City', 'imagen' => 'Leicester.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'MUN']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'M. United', 'imagen' => 'ManUnited.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'NCT']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Newcastle', 'imagen' => 'Newcastle.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'NOR']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Norwich City', 'imagen' => 'Norwich.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'LIV']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Liverpool', 'imagen' => 'Liverpool.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SOU']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Southampton', 'imagen' => 'Southampton.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'STK']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Stoke City', 'imagen' => 'StokeCity.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SUN']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Sunderland', 'imagen' => 'Sunderland.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SWA']);
		factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Swansea City', 'imagen' => 'SwanseaCity.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'HOT']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'T. Hotspur', 'imagen' => 'Hotspur.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BRO']);
		factory(luj\Models\Competidor::class)->create([
			'nombre' => 'West Bromwich Albion', 'imagen' => 'BromwichAlbion.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'HAM']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'West Ham', 'imagen' => 'WestHam.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'WAT']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Watford', 'imagen' => 'Watford.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'CIT']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'M. City', 'imagen' => 'ManCity.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);


        //******************************** FUTBOL ALEMANIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Alemania')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'LVK']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'B. Leverkusen', 'imagen' => 'BLeverkusen.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BAY']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'B. München', 'imagen' => 'BMunchen.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SCH']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Schalke04', 'imagen' => 'Schalke.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BRE']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'W. Bremen', 'imagen' => 'WBremen.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BMG']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Borussia MG', 'imagen' => 'Borussia.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BVB']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'B. Dortmund', 'imagen' => 'Dortmund.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        //******************************** FUTBOL FRANCIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Francia')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'MON']);      
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'AS Mónaco FC', 'imagen' => 'Monaco.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'OLY']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'O. Lyon', 'imagen' => 'Lyon.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SGE']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'París S.G.', 'imagen' => 'ParisSG.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        

        //******************************** FUTBOL HOLANDA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Holanda')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'FCK']);       
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Copenhaguen', 'imagen' => 'Copenhaguen.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'PSV']);
        $pais = luj\Models\Pais::where('nombre', 'Holanda')->first()->id;
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'PSV Eindhoven', 'imagen' => 'PSV.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        //******************************** FUTBOL ITALIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Italia')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'JUV']);       
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Juventus FC', 'imagen' => 'Juventus.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'NAP']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'SSC Nápoles', 'imagen' => 'Napoles.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        //******************************** FUTBOL PORTUGAL ********************************
        $pais = luj\Models\Pais::where('nombre', 'Portugal')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BEN']);        
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'SL Benfica', 'imagen' => 'Benfica.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'SCP']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'SC Portugal', 'imagen' => 'Portugal.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'POR']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Porto', 'imagen' => 'Porto.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        //******************************** FUTBOL RUSIA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Rusia')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'MOS']);        
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'CSKA Moscú', 'imagen' => 'Moscu.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'ROS']);
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Rostov', 'imagen' => 'Rostov.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        //******************************** FUTBOL TURQUÍA ********************************
        $pais = luj\Models\Pais::where('nombre', 'Turquía')->first()->id;

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BES']);       
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Besiktas JK', 'imagen' => 'Besiktas.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        //******************************** FUTBOL OTROS ********************************
        $pais = luj\Models\Pais::where('nombre', 'Bulgaria')->first()->id;
        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'LUD']);        
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'PFC Ludogorets', 'imagen' => 'Ludogorets.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BRU']);
        $pais = luj\Models\Pais::where('nombre', 'Bélgica')->first()->id;
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Club Brujas KV', 'imagen' => 'Brujas.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'CEL']);
        $pais = luj\Models\Pais::where('nombre', 'Escocia')->first()->id;
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Celtic FC', 'imagen' => 'Celtic.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'LVA']);
        $pais = luj\Models\Pais::where('nombre', 'Polonia')->first()->id;
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'Legia Varsovia', 'imagen' => 'Varsovia.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'DIK']);
        $pais = luj\Models\Pais::where('nombre', 'Rumania')->first()->id;
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Dinamo Kiev', 'imagen' => 'Dinamo.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'DIN']);
        $pais = luj\Models\Pais::where('nombre', 'Serbia')->first()->id;
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'GNK Dinamo Zagreb', 'imagen' => 'Dinamo.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);

        $e = factory(luj\Models\Equipo::class)->create(['acronimo' => 'BAS']);
        $pais = luj\Models\Pais::where('nombre', 'Suiza')->first()->id;
        factory(luj\Models\Competidor::class)->create([
			'nombre' => 'FC Basilea', 'imagen' => 'Basilea.png', 'competible_id' => $e->id, 'pais_id' => $pais, 'deporte_id' => 1]);
        

		//FUNCION
		//Crea una seleccion para cada pais y deporte que exista en la BD
		
		$paises = luj\Models\Pais::all();
		$deportes = luj\Models\Deporte::all();
		foreach ($paises as $p) {
			foreach ($deportes as $d) {
                $e = factory(luj\Models\Equipo::class)->create([
                    'acronimo' => $p->nombre_corto,
                    'seleccion' =>  true]);
				factory(luj\Models\Competidor::class)->create([
					'nombre' => $p->nombre, 'imagen' => null, 'competible_id' => $e->id, 'pais_id' => $p->id, 'deporte_id' => $d->id]);
			}		
		}
		
    }
}
