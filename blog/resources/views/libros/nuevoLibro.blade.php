@extends('plantillas.admin')

@section('titulo','Nuevo Libro')

@section('contenido')
	<div class="row">
		<dir class="col">
			<h2>Agregar Libro</h2>
			<form method="post" enctype="multipart/form-data" action="/admin/carreras">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
			  <div class="form-group">
			    <label for="titulo">Título del Libro:</label>
			    <input type="text" class="form-control" name="titulo" id="titulo">
			  </div>
			  <div class="form-group">
			    <label for="autor">Nombre del Autor:</label>
			    <input type="text" class="form-control" name="autor" id="autor">
			  </div>
			  <div class="form-group">
			    <label for="editorial">Nombre de la Editorial:</label>
			    <input type="text" class="form-control" name="editorial" id="editorial">
			  </div>
			  <div class="form-group">
			    <label for="isbn">ISBN:</label>
			    <input type="text" class="form-control" name="isbn" id="isbn">
			  </div>
			  <div class="form-group">
			    <label for="edicion">Edición:</label>
			    <input type="text" class="form-control" name="edicion" id="edicion">
			  </div>
			  <div class="form-group">
			    <label for="carrera">Carrera:</label>
			    <select name="carrera" class="form-control">
			    	<option value="0">Selecciona una carrera</option>
			    	<option value="1">TSU EN TI</option>
			    </select>
			  </div>

			  <input class="btn btn-primary btn-block" type="submit" name="boton" value="Guardar">			  
			</form>
		</dir>
	</div>
@endsection