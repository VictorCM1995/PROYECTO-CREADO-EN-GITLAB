<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
/*Importante importar la clase Edificio antes*/
use App\Models\Edificio;

class EdificioSeeder extends Seeder
{
	private $edificios = array(
		array('nombre' => 'Urbanismos S.A.',
		      'tipoEdificio' => 'Rascacielo',
		      'anchura' => 200,
		      'altura' => 500,
		      'fechaConstruccion' => '2014-09-07',
		      'imagen' => 'rascacielo.jpg',
		      'descripcion' => 'Este es un edificio de los mas altos especializado en vender edificios'),
		array('nombre' => 'Urbanismos S.A.',
		      'tipoEdificio' => 'Rascacielo',
		      'anchura' => 200,
		      'altura' => 500,
		      'fechaConstruccion' => '2014-09-07',
		      'imagen' => 'rascacielo.jpg',
		      'descripcion' => 'Este es un edificio de los mas altos especializado en vender edificios')
	);
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach ($this->edificios as $edificio)
    	{
    		$a = new Edificio();
    		$a->nombre = $edificio['nombre'];
			$a->tipoEdificio = $edificio['tipoEdificio'];
			$a->anchura = $edificio['anchura'];
			$a->altura = $edificio['altura'];
			$a->fechaConstruccion = $edificio['fechaConstruccion'];
			$a->imagen = $edificio['imagen'];
			$a->descripcion = $edificio['descripcion'];
    		$a->save();
    	}
    	$this->command->info('Tabla edificios inicializada con datos');
    }
}