@extends('layouts.rest')
<title>Registro</title>
@section('contenido')
<div class="col s10 offset-s1  card-panel ">
{!!Form::open(array('url'=>'adminrest/menu','method'=>'POST'))!!}
<div class="form-group">
	{{ Form::text('nombreplatillo','',['class'=> 'form-control', 'placeholder'=>'Nombre del platillo'])}}
</div>
<div class="form-group">
	{{ Form::text('precio','',['class'=> 'form-control', 'placeholder'=>'Nombre del platillo'])}}
</div>
<div class="form-group">
	{{ Form::select('age', [
   'young' => 'Under 18',
   'adult' => '19 to 30',
   'adult2' => 'Over 30']
) }}
</div>
<div class="form-group">
	{{ Form::textarea('descripcion','',['class'=> 'materialize-textarea', 'placeholder'=>'Nombre del platillo'])}}
</div>
<div class="form-group">
	{{ Form::text('idrestaurante','',['class'=> 'form-control', 'placeholder'=>'Nombre del platillo'])}}
</div>
{!! Form::close() !!}
</div>

<?php//################################################### MENU #############################################################?>
			<div class="col s10 offset-s1  card-panel ">
				<div class="col s12"><h3 class="center-align">Menu</h3></div>
				<table class="table table-bordered">
					<thead>
						<tr>
							<td>Categoria</td>

						</tr>
					</thead>
					<tbody>
						<tr>
						<td>Platillo</td>
						<td>$</td>
					</tr>
					</tbody>
				</table>
			</div>

<?php//################################################### Ingredientes #############################################################?>

		<div class="col s10 offset-s1 card-panel ">
			<div class="col s12"><h3 class="center-align">Ingredientes del platillo</h3></div>
			<div class="row">

				<div class="input-field col s6">
					<input id="last_name" type="text" class="validate">
					<label for="last_name">Ingrediente</label>
				</div>
				<div class="input-field col s3">
				<a class="btn-floating	 waves-effect waves-light"><i class="material-icons">add</i></a>
				</div>
			</div>
		</div>
		{!!Form::close()!!}



@endsection
