@extends('layouts.rest')
@section('contenido')
<div class="big-padding text-center  whitw-text">
	<div class="center-align">
		<h1>Listado de  platillos</h1>
	</div>
	</div>
	<div class="right-align">
		@include('adminrest.menu.search')
	</div>



<div class="">

	<table>
		<thead>
			<tr>
				<td>Platillo</td>
				<td>Precio</td>
				<td>Categoria</td>
				<td>Descripcion</td>
			</tr>
		</thead>
		<tbody>
			@foreach ($platillos as $p)
			<tr>
				<td>{{ $p->nombreplatillo}}</td>
				<td>${{ $p->precio}}</td>
				<td>{{ $p->categoria}}</td>
				<td width="550">{{ $p->descripcion}}</td>

				<td>
					<a class="btn-floating waves-effect waves-light blue"><i class="material-icons">edit</i></a>
					<a class="btn-floating waves-effect waves-light red"><i class="material-icons">delete</i></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
<div class="floating">

</div>
<div class="floating">
	<a href="{{url('adminrest\menu\create')}}" class="btn-floating btn-large waves-effect waves-light green">
		<i class="material-icons">add</i>
	</a>
</div>



@endsection
