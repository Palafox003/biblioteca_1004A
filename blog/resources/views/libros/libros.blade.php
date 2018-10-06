@extends('plantillas.admin')

@section('titulo','Libros')

@section('contenido')
	<div class="row">
		<div class="col">
			<!--  -->
	@if(session('status'))
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  <strong>{{session('status')}}!</strong>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
}	@endif		
			<h2>Lista de Libros</h2>
			<table class="table">
				<tr>
					<th>#</th>
					<th>TÍTULO</th>
					<th>AUTOR</th>
					<th>EDITORIAL</th>
					<th>ISBN</th>
					<th>EDICIÓN</th>
					<th>CARRERA</th>
					<th>EDITAR</th>
					<th>ELIMINAR</th>
				</tr>
			@foreach($libros as $libro)
				<tr>
					<td>{{($loop->index+1)}}</td>		
					<td>{{$libro->nombre}}</td>
					<td>{{$libro->autor}}</td>
					<td>{{$libro->editorial}}</td>
					<td>{{$libro->isbn}}</td>
					<td>{{$libro->edicion}}</td>
					<td>{{$libro->carrera->nombre}}</td>
					<td><a class="btn btn-primary" href="">Editar</a></td>
					<td>
						<form method="post" action="">
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