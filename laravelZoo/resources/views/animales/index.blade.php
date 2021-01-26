@extends('layouts.master')

@section('titulo')
	Zoológico
@endsection

@section('contenido')
<div class="container">
	<div class="row">
		@foreach( $animales as $animal )
		<div class="col-xs-12 col-sm-6 col-md-4 animales">
			<a class="btn btn-outline-primary" href="{{ route('animales.show' , $animal) }}">
				<img src="{{ asset("assets/imagenes/") }}/{{ $animal->imagen }}" style="height:200px"/>
				<h4 style="min-height:45px;margin:5px 0 10px 0">
					{{$animal->especie}}
				</h4>
			</a>
		</div>
		@endforeach
	</div>
</div>
@endsection