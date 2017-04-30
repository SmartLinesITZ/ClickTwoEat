@extends('layouts.app')
@section('contenido')
<div class="big-padding text-center  whitw-text">
	<h1>Restaurantes</h1>
</div>
<div class="">
	<table class="table table-bordered">
		<thead>
		<tr>
      <td>Nombre del Rest.</td>
			<td>Admin</td>
			<td>Correo</td>
			<td>Telefono</td>
			<td>N° Tablets</td>
			<td>Acciones</td>
		</tr>
		</thead>
		<tbody>
			@foreach ($restaurantes as $rest)
			<tr>
				<td></td>
				<td>Pendiente</td>
				<td>Pendiente</td>
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
