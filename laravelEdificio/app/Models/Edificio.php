<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
	use HasFactory;
	protected $table = "edificios";

	public function getEdad()
	{
		$fechaFormateada=Carbon::parse($this->fechaConstruccion);
		return $fechaFormateada->diffInYears(Carbon::now());
	}
}
