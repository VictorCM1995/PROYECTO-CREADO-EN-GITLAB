@extends('layouts.master')

@section('titulo')
	Edificios
@endsection

@section('contenido')
<div class="container">
	<div class="row">
		@foreach( $edificios as $edificio )
		<div class="col-xs-12 col-sm-6 col-md-4 animales">
			<a class="btn btn-outline-primary" href="{{ route('edificios.show' , $edificio) }}">
				<img src="{{ asset("assets/imagenes/") }}/{{ $edificio->imagen }}" style="height:200px"/>
				<h4 style="min-height:45px;margin:5px 0 10px 0">
					{{$edificio->nombre}}
					<ul>
						<li>({{$edificio->altura}} X {{$edificio->anchura}})</li>
					</ul>
				</h4>
			</a>
		</div>
		@endforeach
	</div>
</div>
@endsection