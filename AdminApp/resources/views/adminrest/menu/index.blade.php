@extends('layouts.rest')
@section('contenido')
<div class="big-padding text-center  whitw-text">
	<h1>Restaurantes</h1>
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
			@foreach ()
			<tr>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
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
<div class="floating">
	<a href="{{url('/products/create')}}" class="btn btn-primary btn-fab">
		<i class="material-icons">add</i>
	</a>
</div>

@endsection
