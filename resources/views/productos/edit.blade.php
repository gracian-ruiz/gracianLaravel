@extends("../layouts.plantilla")


@section("cabecera")

editar registro

@endsection

@section("contenido")

<button><a href="{{ url('/productos') }}">volver</a></button>

<form method="post" action="/productos/{{$producto->id}}">

<table><tr><td>nombre:</td>
	<td>



	<input type="text" name="NombreArticulo" value="{{$producto->NombreArticulo}}">
	{{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
</td>
</tr>


<tr><td>Seccion:</td>
	<td>



	<input type="text" name="Seccion" value="{{$producto->Seccion}}">
	{{csrf_field()}}

</td>
</tr>
<tr><td>Precio:</td>
	<td>



	<input type="text" name="Precio" value="{{$producto->Precio}}">
	{{csrf_field()}}

</td>
</tr>
<tr><td>Fecha:</td>
	<td>



	<input type="text" name="Fecha" value="{{$producto->Fecha}}">
	{{csrf_field()}}

</td>
</tr>
<tr><td>Pais de origen:</td>
	<td>



	<input type="text" name="PaisOrigen" value="{{$producto->PaisOrigen}}">
	{{csrf_field()}}

</td>
</tr>


<tr>
<td colspan="2" align="center">
	<input type="submit" name="enviar" value="Actualizar">




</td></tr>
<tr>
<td colspan="2" align="center">
	<input type="reset" name="Borrar" value="Borrar campo">




</td></tr>
</table>

</form>


<form method="post" action="/productos/{{$producto->id}}">
		{{csrf_field()}}
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" name="" value="ELiminar registro">

		</form>


		@if(count($errors)>0)

		     @foreach($errors->all() as $error)

		     {{$error}}

		@endforeach

		@endif




@endsection

@section("pie")


@endsection