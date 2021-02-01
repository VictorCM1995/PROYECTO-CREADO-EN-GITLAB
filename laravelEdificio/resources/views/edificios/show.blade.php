@extends('layouts.master')

@section('titulo')
	Edificios
@endsection

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<img src="{{ asset('assets/imagenes') }}/{{ $edificio['imagen'] }}" style="height:200px"/>
		</div>
		<div class="col-sm-9">
			<h1>{{ $edificio["nombre"] }} ({{ $edificio["fechaConstruccion"] }})</h1>
			<h3>Anchura</h3>
			<p>{{ $edificio["anchura"] }} m</p>
			<h3>Altura</h3>
			<p>{{ $edificio["altura"] }} m</p>
			<h3>Descripción</h3>
			<p>{{ $edificio["descripcion"] }}</p>
			<h3>Revisiones</h3>
				<div class="row col-8">
					<div class="col">
						<a href="{{ route('edificios.edit' , $edificio) }}" class="btn btn-warning">Editar</a>
					</div>
					<div class="col">
						<a href="{{ route('home') }}" class="btn btn-outline-success">Volver al listado</a>
					</div>
				</div>
		</div>
	</div>
</div>

@endsection