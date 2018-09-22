@extends('plantillas.admin')

@section('titulo','Carreras')

@section('contenido')
	<div class="row">
		<div class="col">
			<ul>
		@foreach($carreras as $carrera)		
				<li>{{$carrera->nombre}}</li>
		@endforeach
			</ul>
		</div>
	</div>
@endsection