@extends('plantillas.admin')

@section('titulo','Nueva Carrera')

@section('contenido')
	<div class="row">
		<dir class="col">
			<h2>Agregar Carrera</h2>
			<form method="post" enctype="multipart/form-data" action="/admin/carreras">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			  <div class="form-group">
			    <label for="id">ID Carrera:</label>
			    <input type="text" class="form-control" name="id" id="id">
			  </div>
			  <div class="form-group">
			    <label for="nombre">Nombre Carrera:</label>
			    <input type="text" class="form-control" name="nombre" id="nombre">
			  </div>
			  <div class="form-group">
			    <label for="logo">Logo Carrera:</label>
			    <input type="file" class="form-control" name="logo" id="logo">
			  </div>

			  <input class="btn btn-primary btn-block" type="submit" name="boton" value="Guardar">			  
			</form>
		</dir>
	</div>
@endsection