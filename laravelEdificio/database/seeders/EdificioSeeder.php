<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Edificio;

class EdificioSeeder extends Seeder
{
	private $edificios = array(
		array('nombre' => 'Rascacielos 1',
			'tipoEdificio' => "Rascacielo",
			'anchura' => 100,
			'altura' => 200,
			'fechaConstruccion' => '2010-12-11',
			'imagen' => '1.jpg',
			'descripcion' => 'Un rascacielos que provoca vertigo al estar en él'),
		array('nombre' => 'Rascacielos 2',
			'tipoEdificio' => "Rascacielo",
			'anchura' => 120,
			'altura' => 250,
			'fechaConstruccion' => '2011-01-12',
			'imagen' => '2.jpg',
			'descripcion' => 'Un rascacielos que provoca vertigo y mareos al estar en él'),
		array('nombre' => 'Rascacielo 3',
			'tipoEdificio' => "Rascacielo",
			'anchura' => 115,
			'altura' => 235,
			'fechaConstruccion' => '2011-01-01',
			'imagen' => '3.jpg',
			'descripcion' => 'Un rascacielos que provoca vertigo y mareos al estar en él. Adecuado para pilotos de avion'),
		array('nombre' => 'Obra',
			'tipoEdificio' => "Edificio",
			'anchura' => 10,
			'altura' => 300,
			'fechaConstruccion' => '2010-12-12',
			'imagen' => '4.jpg',
			'descripcion' => 'Se desconoce el edificio que se esta construyendo'),
		array('nombre' => 'Hospital',
			'tipoEdificio' => "Hospital",
			'anchura' => 200,
			'altura' => 200,
			'fechaConstruccion' => '2012-02-13',
			'imagen' => '5.jpg',
			'descripcion' => 'Esta UCI principal'),
		array('nombre' => 'Museo de la Naturaleza',
			'tipoEdificio' => "Museo",
			'anchura' => 300,
			'altura' => 300,
			'fechaConstruccion' => '2012-03-03',
			'imagen' => '6.jpg',
			'descripcion' => 'Edificio que cuenta la fauna y flora de la region'),
		array('nombre' => 'Edificio desconocido',
			'tipoEdificio' => "Desconocido",
			'anchura' => 100,
			'altura' => 300,
			'fechaConstruccion' => '2012-04-04',
			'imagen' => '7.jpg',
			'descripcion' => 'Se desconocen los datos de este edificio, insuficiente informacion')
		
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
    	$this->command->info('Tabla edificio inicializada con datos');
    }
}
