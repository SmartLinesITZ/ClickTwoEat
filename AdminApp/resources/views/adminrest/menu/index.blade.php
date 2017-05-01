@extends('layouts.rest')
@section('contenido')
<div class="big-padding text-center  whitw-text">
	<h1>Platillos</h1>
</div>
<div class="">
	<table class="table table-bordered">
		<thead>
		<tr>
      <td>Platillo</td>
			<td>Precio</td>
			<td>Categoria</td>
			<td>Decripcion</td>
			<td>Acciones</td>
		</tr>
		</thead>
		<tbody>
			@foreach ($platillos as $platillo)
			<tr>
				<td>{{$platillo->nombreplatillo}}</td>
				<td>{{$platillo->precio}}</td>
				<td>{{$platillo->categoria}}</td>
				<td>{{$platillo->categoria}}</td>
				<td>
					<a href="">
					Editar
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="floating right-align">
	<a href="{{url(" class="btn-floating waves-effect waves-light">
		<i class="material-icons">add</i>
	</a>
</div>

@endsection
