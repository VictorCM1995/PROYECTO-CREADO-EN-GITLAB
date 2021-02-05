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
		return view("edificios.edit", ["edificio"=>$edificio]);
	}

	public function store(Request $request){
		$a = new Edificio();
		$a->nombre=$request->nombre;
		$a->anchura=$request->anchura;
		$a->altura=$request->altura;
		$a->imagen=$request->imagen;
		$a->descripcion=$request->descripcion;
		$a->tipoEd=$request->tipoEd;
		$a->fecha=$request->fecha;
		$a->save();
		return redirect()->action([EdificioController::class,'index']);
	}

	public function update(Request $request, $id){
		$a = Edificio::find($id);
		$a->nombre=$request->nombre;
		$a->anchura=$request->anchura;
		$a->altura=$request->altura;
		$a->imagen=$request->imagen;
		$a->descripcion=$request->descripcion;
		$a->tipoEd=$request->tipoEd;
		$a->fecha=$request->fecha;
		$a->save();
		return redirect()->action([EdificioController::class,'index']);
	}
}
