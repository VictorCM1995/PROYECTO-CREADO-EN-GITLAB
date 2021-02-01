<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revision extends Model
{
    use HasFactory;
    protected $table = "revisiones";

    public function contar()
	{
		$cuenta=Carbon::->count();
		return $cuenta;
	}
}
