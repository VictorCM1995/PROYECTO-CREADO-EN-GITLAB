<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Carbon\Carbon;

class AnimalController extends Controller
{
	    
	public function index() {
		$animales = Animal::all();
		return view("animales.index", compact("animales"));
	}

	public function show($id) {
		$animal = Animal::find($id);
		return view('animales.show', ["animal" => $animal]);
	}

	public function create()
	{
		return view('animales.create');
	}

	public function edit($id)
	{
		$animal = Animal::find($id);
		return view("animales.edit", ["animal" => $animal]);
	}

	public function store(Request $request){
		$a = new Animal();
		$a->especie=$request->especie;
		$a->peso=$request->peso;
		$a->altura=$request->altura;
		$a->fechaNacimiento=$request->fechaNacimiento;
		$a->imagen=$request->imagen;
		$a->alimentacion=$request->alimentacion;
		$a->descripcion=$request->descripcion;
		return redirect()->action([AnimalController::class,'show']);
	}

	public function update(Request $request, $id){
		$animal = Animal::findOrFail($id)
		$animal->especie = $request->especie;
		$animal->peso = $request->peso;
		$animal->altura = $request->altura;
		$animal->fechaNacimiento = $request->fechaNacimiento;
		$animal->imagen = $request->imagen;
		$animal->alimentacion = $request->alimentacion;
		$animal->descripcion = $request->descripcion;
		$animal->save();
		return redirect()->action([AnimalController::class,'show'])->with("datos","Registro actualizado correctamente");
	}
}