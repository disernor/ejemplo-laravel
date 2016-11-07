<table class="table table-hover">
@if(isset($noticias))
<thead>
	<th>Título</th>
	<th>Descripción</th>
	<th>Imagen</th>
	<th></th>
</thead>
<tbody>
	@foreach($noticias as $n)
	<tr>
		<td>{{ $n->titulo }}</td>
		<td>{{ $n->descripcion }}</td>
		<td>
			<img src="imgnoticias/{{ $n->urlimg}}" class="img-thumbnail" alt="Cinque Terre" width="152" height="118">
		</td>
		<td>
			<a href="noticias/{{$n->id}}/edit" class="btn btn-warning btn-xs">Modificar</a>
			<a href="" class="btn btn-danger btn-xs">Eliminar</a>
		</td>
		<td></td>
	</tr>
	@endforeach
</tbody>
@endif
</table>