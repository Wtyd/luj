<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
Class PaisTableSeeder extends Seeder {

	public function run() {
		DB::table('paises')->truncate(); //borra la información previa
		/*$paises = [
			['nombre' => 'España', 'nombre_corto' => 'es', 'bandera' => 'España.png'],
			['nombre' => 'Alemania', 'nombre_corto' => 'de', 'bandera' => 'Alemania.png'],
			['nombre' => 'Inglaterra', 'nombre_corto' => 'en', 'bandera' => 'Inglaterra.png'],
			['nombre' => 'Francia', 'nombre_corto' => 'fr', 'bandera' => 'Francia.png'],
			['nombre' => 'Italia', 'nombre_corto' => 'it', 'bandera' => 'Italia.jpg'],
			['nombre' => 'Holanda', 'nombre_corto' => 'hol', 'bandera' => 'Holanda.png']

			['nombre' => 'Argelia', 'bandera' => 'Argelia.png'],
			['nombre' => 'Argentina', 'bandera' => 'argentina.jpg'],
			['nombre' => 'Bélgica', 'bandera' => 'Belgica.png'],
			['nombre' => 'Croacia', 'bandera' => 'Croacia.png'],
			['nombre' => 'Dinamarca', 'bandera' => 'Dinamarca.jpg'],
			['nombre' => 'Escocia', 'bandera' => 'Escocia.png'],
			['nombre' => 'Noruega', 'bandera' => 'Noruega.png'],
			['nombre' => 'Rusia', 'bandera' => 'Rusia.png']
		];
		DB::table('paises')->insert($paises);*/
		//https://es.wikipedia.org/wiki/ISO_3166-1
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Internacional', 'nombre_corto' => 'INT', 'bandera' => 'Internacional.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Internacional Club', 'nombre_corto' => 'ICB', 'bandera' => 'Internacional.png', ]);
		//1 ************************* EUROPA *************************
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Albania', 'nombre_corto' => 'ALB', 'bandera' => 'Albania.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Alemania', 'nombre_corto' => 'ALE', 'bandera' => 'Alemania.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Austria', 'nombre_corto' => 'AUT', 'bandera' => 'Alemania.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Bélgica', 'nombre_corto' => 'BEL', 'bandera' => 'Belgica.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Croacia', 'nombre_corto' => 'CRO', 'bandera' => 'Croacia.png', ]);
		//6
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Dinamarca', 'nombre_corto' => 'DIN', 'bandera' => 'Dinamarca.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Escocia', 'nombre_corto' => 'ESC', 'bandera' => 'Escocia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Eslovaquia', 'nombre_corto' => 'ESL', 'bandera' => 'Eslovaquia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'España', 'nombre_corto' => 'ESP','bandera' => 'España.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Francia', 'nombre_corto' => 'FRA', 'bandera' => 'Francia.png', ]);
		//11
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Gales', 'nombre_corto' => 'GAL','bandera' => 'Gales.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Grecia', 'nombre_corto' => 'GRE','bandera' => 'Grecia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Holanda', 'nombre_corto' => 'HOL', 'bandera' => 'Holanda.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Hungría', 'nombre_corto' => 'HUN','bandera' => 'Hungria.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Inglaterra', 'nombre_corto' => 'ING', 'bandera' => 'Inglaterra.png', ]);
		//16
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Irlanda', 'nombre_corto' => 'IRL', 'bandera' => 'Irlanda.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Irlanda del Norte', 'nombre_corto' => 'IRN', 'bandera' => 'IrlandaNorte.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Islandia', 'nombre_corto' => 'ISL', 'bandera' => 'Islandia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Italia', 'nombre_corto' => 'ITA', 'bandera' => 'Italia.jpg', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Noruega', 'nombre_corto' => 'NOR', 'bandera' => 'Noruega.png', ]);
		//21	
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Polonia', 'nombre_corto' => 'POL', 'bandera' => 'Polonia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Portugal', 'nombre_corto' => 'POR', 'bandera' => 'Portugal.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Rep. Checa', 'nombre_corto' => 'RCH', 'bandera' => 'RepCheca.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Rumania', 'nombre_corto' => 'RUM', 'bandera' => 'Rumania.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Rusia', 'nombre_corto' => 'RUS', 'bandera' => 'Rusia.png', ]);
		//26
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Serbia', 'nombre_corto' => 'SER', 'bandera' => 'Serbia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Suecia', 'nombre_corto' => 'SUE', 'bandera' => 'Suecia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Suiza', 'nombre_corto' => 'SUI', 'bandera' => 'Suiza.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Turquía', 'nombre_corto' => 'TUR', 'bandera' => 'Turquía.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Ucrania', 'nombre_corto' => 'UCR', 'bandera' => 'Ucrania.png', ]);
		//31 ************************* AFRICA *************************
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Argelia', 'nombre_corto' => 'AGL', 'bandera' => 'Argelia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Burkina Faso', 'nombre_corto' => 'BKF', 'bandera' => 'BurkinaFaso.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Cabo Verde', 'nombre_corto' => 'CAV', 'bandera' => 'CaboVerde.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Camerún', 'nombre_corto' => 'CAM', 'bandera' => 'Camerun.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Congo', 'nombre_corto' => 'CON', 'bandera' => 'Congo.png', ]);
		//36
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Costa de Marfil', 'nombre_corto' => 'CMA', 'bandera' => 'CostaMarfil.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Egipto', 'nombre_corto' => 'EGI', 'bandera' => 'Egipto.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Gabón', 'nombre_corto' => 'GAB', 'bandera' => 'Gabon.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Ghana', 'nombre_corto' => 'GHA', 'bandera' => 'Ghana.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Guinea', 'nombre_corto' => 'GUI', 'bandera' => 'Guinea.png', ]);
		//41
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Guinea Ecuatorial', 'nombre_corto' => 'GEC', 'bandera' => 'GuineaEcuatorial.png', ]);	
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Libia', 'nombre_corto' => 'LIB', 'bandera' => 'Libia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Malí', 'nombre_corto' => 'MLI', 'bandera' => 'Mali.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Marruecos', 'nombre_corto' => 'MAR', 'bandera' => 'Marruecos.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Nigeria', 'nombre_corto' => 'NIG', 'bandera' => 'Nigeria.png', ]);
		//46
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'RD Congo', 'nombre_corto' => 'RDC', 'bandera' => 'RDCongo.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Senegal', 'nombre_corto' => 'SEN', 'bandera' => 'Senegal.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Sudáfrica', 'nombre_corto' => 'SAF', 'bandera' => 'Sudafrica.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Túnez', 'nombre_corto' => 'TUN', 'bandera' => 'Tunez.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Zambia', 'nombre_corto' => 'ZAM', 'bandera' => 'Zambia.png', ]);
		//51 ************************* AMERICA *************************
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Argentina', 'nombre_corto' => 'ARG', 'bandera' => 'Argentina.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Bolivia', 'nombre_corto' => 'BOL', 'bandera' => 'Bolivia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Brasil', 'nombre_corto' => 'BRA', 'bandera' => 'Brasil.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Canada', 'nombre_corto' => 'CAN', 'bandera' => 'Canada.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Chile', 'nombre_corto' => 'CHL', 'bandera' => 'Chile.png', ]);
		//56
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Colombia', 'nombre_corto' => 'COL', 'bandera' => 'Colombia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Costa Rica', 'nombre_corto' => 'COR', 'bandera' => 'Costa Rica.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Ecuador', 'nombre_corto' => 'ECU', 'bandera' => 'Ecuador.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'EEUU', 'nombre_corto' => 'USA', 'bandera' => 'EEUU.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Haití', 'nombre_corto' => 'HAI', 'bandera' => 'Haiti.png', ]);
		//61
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Honduras', 'nombre_corto' => 'HON', 'bandera' => 'Honduras.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Jamaica', 'nombre_corto' => 'JAM', 'bandera' => 'Jamaica.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'México', 'nombre_corto' => 'MEX', 'bandera' => 'Mexico.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Panamá', 'nombre_corto' => 'PAN', 'bandera' => 'Panamá.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Paraguay', 'nombre_corto' => 'PAR', 'bandera' => 'Paraguay.png', ]);
		//66
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Perú', 'nombre_corto' => 'PER', 'bandera' => 'Peru.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Uruguay', 'nombre_corto' => 'URU', 'bandera' => 'Uruguay.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Venezuela', 'nombre_corto' => 'VEN', 'bandera' => 'Venezuela.png', ]);

		//69 ************************* OCEANIA *************************
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Australia', 'nombre_corto' => 'AUS', 'bandera' => 'Australia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Fiyi', 'nombre_corto' => 'FIY', 'bandera' => 'Fiyi.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Islas Cook', 'nombre_corto' => 'COO', 'bandera' => 'IslasCook.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Islas Salomón', 'nombre_corto' => 'SAL', 'bandera' => 'IslasSalomón.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Nueva Caledonia', 'nombre_corto' => 'CAL', 'bandera' => 'NuevaCaledonia.png', ]);
		//74
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Nueva Zelanda', 'nombre_corto' => 'NZE', 'bandera' => 'NuevaZelanda.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Papúa Nueva Guinea', 'nombre_corto' => 'PAP', 'bandera' => 'PapuaNuevaGuinea.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Samoa', 'nombre_corto' => 'SAM', 'bandera' => 'Samoa.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Tahití', 'nombre_corto' => 'TAH', 'bandera' => 'Tahití.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Vanuatu', 'nombre_corto' => 'VAN', 'bandera' => 'Vanuatu.png', ]);
		//79 ************************* ASIA *************************
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Arabia Saudí', 'nombre_corto' => 'ARB', 'bandera' => 'ArabiaSaudi.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Baréin', 'nombre_corto' => 'BAR', 'bandera' => 'Baréin.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Birmania', 'nombre_corto' => 'BIR', 'bandera' => 'Birmania.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Camboya', 'nombre_corto' => 'CMB', 'bandera' => 'Camboya.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'China', 'nombre_corto' => 'CHI', 'bandera' => 'China.png', ]);
		//84
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Corea del Norte', 'nombre_corto' => 'CNO', 'bandera' => 'CoreaNorte.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Corea del Sur', 'nombre_corto' => 'CSU', 'bandera' => 'CoreaSur.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Emiratos Árabes', 'nombre_corto' => 'EMI', 'bandera' => 'EmiratosArabes.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Hong Kong', 'nombre_corto' => 'HKO', 'bandera' => 'HongKong.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'India', 'nombre_corto' => 'IND', 'bandera' => 'India.png', ]);
		//89
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Indonesia', 'nombre_corto' => 'IDO', 'bandera' => 'Indonesia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Irak', 'nombre_corto' => 'IRK', 'bandera' => 'Irak.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Irán', 'nombre_corto' => 'IRA', 'bandera' => 'Iran.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Israel', 'nombre_corto' => 'ISR', 'bandera' => 'Israel.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Japón', 'nombre_corto' => 'JAP', 'bandera' => 'Japón.png', ]);
		//94
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Kuwait', 'nombre_corto' => 'KUW', 'bandera' => 'Kuwait.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Malasia', 'nombre_corto' => 'MYS', 'bandera' => 'Malasia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Mongolia', 'nombre_corto' => 'MON', 'bandera' => 'Mongolia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Pakistán', 'nombre_corto' => 'PAK', 'bandera' => 'Pakistan.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Qatar', 'nombre_corto' => 'QAT', 'bandera' => 'Qatar.png', ]);
		//99
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Singapur', 'nombre_corto' => 'SIN', 'bandera' => 'Singapur.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Siria', 'nombre_corto' => 'SIR', 'bandera' => 'Siria.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Tailandia', 'nombre_corto' => 'TAI', 'bandera' => 'Tailandia.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Taiwán', 'nombre_corto' => 'TAW', 'bandera' => 'Taiwan.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Uzbekistán', 'nombre_corto' => 'UZB', 'bandera' => 'Uzbekistán.png', ]);
		//104
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Vietnam', 'nombre_corto' => 'VIE', 'bandera' => 'Vietnam.png', ]);
		factory(luj\Models\Pais::class)->create([
			'nombre' => 'Yemen', 'nombre_corto' => 'YEM', 'bandera' => 'Yemen.png', ]);
		//factory(luj\Models\Pais::class, 10)->create();
	}
}