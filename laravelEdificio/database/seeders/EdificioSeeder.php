<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Edificio;

class EdificioSeeder extends Seeder
{
	private $edificios = array(
		array('nombre' => 'Rascacielos 1',
			'anchura' => 100,
			'altura' => 200,
			'imagen' => '1.jpg',
			'descripcion' => 'Un rascacielos que provoca vertigo al estar en él',
			'tipoEd' => "Rascacielo",
			'fecha' => '2010-12-11'),
		array('nombre' => 'Rascacielos 2',
			'anchura' => 120,
			'altura' => 250,
			'imagen' => '2.jpg',
			'descripcion' => 'Un rascacielos que provoca vertigo y mareos al estar en él',
			'tipoEd' => "Rascacielo",
			'fecha' => '2011-01-12'),
		array('nombre' => 'Rascacielo 3',
			'anchura' => 115,
			'altura' => 235,
			'imagen' => '3.jpg',
			'descripcion' => 'Un rascacielos que provoca vertigo y mareos al estar en él. Adecuado para pilotos de avion',
			'tipoEd' => "Rascacielo",
			'fecha' => '2011-01-01'),
		array('nombre' => 'Obra',
			'anchura' => 100,
			'altura' => 300,
			'imagen' => '4.jpg',
			'descripcion' => 'Se desconoce el edificio que se esta construyendo',
			'tipoEd' => "Edificio",
			'fecha' => '2010-12-12'),
		array('nombre' => 'Hospital',
			'anchura' => 200,
			'altura' => 200,
			'imagen' => '5.jpg',
			'descripcion' => 'Esta UCI principal',
			'tipoEd' => "Hospital",
			'fecha' => '2012-02-13'),
		array('nombre' => 'Museo de la Naturaleza',
			'anchura' => 300,
			'altura' => 300,
			'imagen' => '6.jpg',
			'descripcion' => 'Edificio que cuenta la fauna y flora de la region',
			'tipoEd' => "Museo",
			'fecha' => '2012-03-03'),
		array('nombre' => 'Edificio desconocido',
			'anchura' => 100,
			'altura' => 300,
			'imagen' => '7.jpg',
			'descripcion' => 'Se desconocen los datos de este edificio, insuficiente informacion',
			'tipoEd' => "Desconocido",
			'fecha' => '2012-04-04')
		
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
    		$a->anchura = $edificio['anchura'];
    		$a->altura = $edificio['altura'];
    		$a->imagen = $edificio['imagen'];
    		$a->descripcion = $edificio['descripcion'];
		$a->tipoEd = $edificio['tipoEd'];
		$a->fecha = $edificio['fecha'];
    		$a->save();
    	}
    	$this->command->info('Tabla edificio inicializada con datos');
    }
}
