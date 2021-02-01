<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/*Importante importar la clase Revision antes*/
use App\Models\Revision;

class RevisionSeeder extends Seeder
{
	private $revisiones = array(
		array('fecha' => '2011-09-07','descripcion' => 'No hay nada','id_animal' => 1),
		array('fecha' => '2011-03-07','descripcion' => 'No hay nada','id_animal' => 2)
	);
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->revisiones as $revision)
    	{
    		$a = new Revision();
    		$a->fecha = $revision['fecha'];
    		$a->descripcion = $revision['descripcion'];
    		$a->id_animal = $revision['id_animal'];
    		$a->save();
    	}
    	$this->command->info('Tabla revisiones inicializada con datos');
    }
}
