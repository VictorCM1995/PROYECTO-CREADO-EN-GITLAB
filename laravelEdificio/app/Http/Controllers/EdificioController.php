<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Edificio;
use Carbon\Carbon;

class EdificioController extends Controller
{
	    
	public function index() {
		$edificios = Edificio::all();
		return view("edificios.index", compact("edificios"));
	}

	public function show($id) {
		$edificio = Edificio::find($id);
		return view('edificios.show', ["edificio" => $edificio]);
	}

	public function create()
	{
		return view('edificios.create');
	}

	public function edit($id)
	{
		$edificio = Edificio::find($id);
		return view("edificios.edit", ["edificio" => $edificio]);
	}
}
