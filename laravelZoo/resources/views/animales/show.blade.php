@extends('layouts.master')

@section('titulo')
	Zoológico
@endsection

@section('contenido')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<img src="{{ asset("assets/imagenes/") }}/{{ $animal["imagen"] }}" style="height:200px"/>
		</div>
		<div class="col-sm-9">
			<h1>{{ $animal["especie"] }} ({{ $animal["fechaNacimiento"] }})</h1>
			<h3>Peso</h3>
			<p>{{ $animal["peso"] }} kg</p>
			<h3>Altura</h3>
			<p>{{ $animal["altura"] }} cm</p>
			<h3>Descripción</h3>
			<p>{{ $animal["descripcion"] }}</p>
			<h3>Revisiones</h3>
				<div class="row col-8">
					<div class="col">
						<a href="" class="btn btn-warning">Editar</a>
					</div>
					<div class="col">
						<a class="btn btn-success">Añadir revisión</a>
					</div>
					<div class="col">
						<a href="{{ route('home') }}" class="btn btn-outline-success">Volver al listado</a>
					</div>
				</div>
		</div>
	</div>
</div>

@endsection