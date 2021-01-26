@extends('layouts.master')

@section('titulo')
	Zoológico
@endsection

@section('contenido')
<div class="row">
	<div class="offset-md-3 col-md-6">
		<div class="card">
			<div class="card-header text-center">
				Añadir animal
			</div>
			<div class="card-body" style="padding:30px">
				{{-- TODO: Abrir el formulario e indicar el método POST --}}
				<form action="{{route('animales.store')}}">
					{{-- TODO: Protección contra CSRF --}}
					<div class="form-group">
						<label for="especie">Especie</label>
						<input type="text" name="especie" id="especie" class="form-control" required>
					</div>
					<div class="row">
						<div class="col form-group">
							<label for="peso">Peso</label>
							<input class="form-control" type="number" min="0" name="peso" required="">
						</div>
						<div class="col form-group">
							<label for="altura">Altura</label>
							<input class="form-control" type="number" min="0" name="altura" required="">
						</div>
						<div class="col form-group">
							<label for="fecha">Fecha de nacimiento</label>
							<input class="form-control" required type="date" name="fecha" required="">
						</div>
					</div>
					<div class="row form-group">
						<label class="col-4">Alimentación</label>
						<div class="col row">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="alimentacion" id="alimentacion1" value="option1" checked>
								<label class="form-check-label" for="alimentacion1">
									Carnívoro
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="alimentacion" id="alimentacion2" value="option2">
								<label class="form-check-label" for="alimentacion2">
									Hervívoro
								</label>
							</div>
							<div class="form-check disabled">
								<input class="form-check-input" type="radio" name="alimentacion" id="alimentacion3" value="option3">
								<label class="form-check-label" for="alimentacion3">
									Omnívoro
								</label>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="descripcion">Descripción</label>
						<textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="imagen">Elegir imagen</label>
						<input class="form-control-file" type="file" id="img" name="imagen" accept="image/*">
					</div>
					<div class="form-group text-center">
						<button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
						Añadir animal </button>
					</div>
				</form>
				{{-- TODO: Cerrar formulario --}}
			</div>
		</div>
	</div>
</div>
@endsection