@extends('plantillas.admin')

@section('titulo','Carreras')

@section('contenido')
	<div class="row">
		<div class="col">
			<h2>Lista de Carreras</h2>
			<table class="table">
				<tr>
					<th>#</th>
					<th>NOMBRE</th>
					<th>LOGO</th>
					<th>EDITAR</th>
					<th>ELIMINAR</th>
				</tr>
			@foreach($carreras as $carrera)
				<tr>
					<td>{{$carrera->numero}}</td>		
					<td>{{$carrera->nombre}}</td>
					<td><img  class="logo-carrera img-fluid" src="{{asset('/img/'.$carrera->logo)}}"></td>
					<td><a class="btn btn-primary" href="/admin/carreras/{{$carrera->id/edit}}">Editar</a></td>
					<td>
						<form method="post" action="/admin/carreras/{{$carrera->id}}">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<input type="hidden" name="_method" value="DELETE">
							<input class="btn btn-danger" type="submit" name="boton" value="Eliminar">
						</form>
					</td>
				</tr>
			@endforeach
			</table>
			
		
			
		</div>
	</div>
@endsection