<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
    	$this->call('UserTableSeeder');     
    	$this->call('PaisTableSeeder');
    	$this->call('DeporteTableSeeder');
        //$this->call('ServidorTableSeeder'); todavia no esta hecho
        $this->call('CompetidorTableSeeder');
        $this->call('EquipoTableSeeder');
        $this->call('IndividualTableSeeder');
		$this->call('TcompeticionTableSeeder');
		$this->call('CompeticionTableSeeder');
		$this->call('ModalidadTableSeeder');
        $this->call('GrupoTableSeeder');
		$this->call('JornadaTableSeeder');
		/*$this->call('PartidoTableSeeder');//sets
		$this->call('VideoTableSeeder');
		$this->call('ComentarioTableSeeder');
		$this->call('PivoteTableSeeder'); //Contiene varias tablas pivote
		$this->call('CompetidorGrupoTableSeeder'); //Tabla pivote*/
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
