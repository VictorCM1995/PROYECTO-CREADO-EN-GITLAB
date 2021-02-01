@extends('layouts.master')

@section('titulo')
	Edificios
@endsection

@section('contenido')
	<div class="row">
	<div class="offset-md-3 col-md-6">
		<div class="card">
			<div class="card-header text-center">
				Modificar animal
			</div>
			<div class="card-body" style="padding:30px">
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
				<form action="">
					{{-- TODO: Protección contra CSRF --}}
					<div class="form-group">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" id="nombre" class="form-control" value="{{$edificio->nombre}}"required>
					</div>
					<div class="col form-group">
						<label for="tipoEdificio">Tipo de edificio</label>
						<input class="form-control" type="text" name="tipoEdificio" value="{{$edificio->tipoEdificio}}"required="">
					</div>
					<div class="col form-group">
						<label for="altura">Altura</label>
						<input class="form-control" type="number" min="0" name="altura" value="{{$edificio->altura}}" required="">
					</div>
					<div class="col form-group">
						<label for="anchura">Altura</label>
						<input class="form-control" type="number" min="0" name="anchura" value="{{$edificio->anchura}}" required="">
					</div>
					<div class="col form-group">
						<label for="fecha">Fecha de Construccion</label>
						<input class="form-control" required type="date" name="fecha" value="{{$edificio->fechaConstruccion}}"required="">
					</div>
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$edificio->descripcion}}</textarea>
					</div>
					<div class="form-group">
						<label for="imagen">Elegir imagen</label>
						<input class="form-control-file" type="file" id="img" name="imagen" accept="image/*">
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
						Añadir edificio </button>
					</div>
				</form>
				{{-- TODO: Cerrar formulario --}}
			</div>
		</div>
	</div>
</div>
@endsection