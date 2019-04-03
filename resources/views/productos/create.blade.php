@extends("../layouts.plantilla")


@section("cabecera")

@endsection

@section("contenido")

<form method="post" action="/productos" enctype="multipart/form-data">

<table><tr><td>nombre:</td>
	<td>

		<input type="file" name="file">



	<input type="text" name="NombreArticulo">
	{{csrf_field()}}

</td>
</tr>


<tr><td>Seccion:</td>
	<td>



	<input type="text" name="Seccion">
	{{csrf_field()}}

</td>
</tr>
<tr><td>Precio:</td>
	<td>



	<input type="text" name="Precio">
	{{csrf_field()}}

</td>
</tr>
<tr><td>Fecha:</td>
	<td>



	<input type="text" name="Fecha">
	{{csrf_field()}}

</td>
</tr>
<tr><td>Pais de origen:</td>
	<td>



	<input type="text" name="PaisOrigen">
	{{csrf_field()}}

</td>
</tr>


<tr>
<td colspan="2" align="center">
	<input type="submit" name="enviar" value="Enviar">




</td></tr>
<tr>
<td colspan="2" align="center">
	<input type="reset" name="Borrar" value="Borrar">




</td></tr>
</table>

</form>


@endsection

@section("pie")


@endsection