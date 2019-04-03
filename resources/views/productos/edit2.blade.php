@extends("../layouts.plantilla")


@section("cabecera")

editar registro

@endsection

@section("contenido")

<p>prueba</p>

  <select name="" id="sel">
            @foreach($productos as $producto)
            
            
            
                    <option value={{ $producto->id}}>{{ $producto->id}}</option>
            
            @endforeach
            </select>


            <script>

$(document).ready(function(){
  $("option").click(function(){
    edit2=$('select[id=sel]').val();
    //alert ('/productos/'+edit2);
    $('#cambiar').attr('action', '/productos/'+edit2);
    alert("El texto del botón es --> " + $("#cambiar").attr("action"));
  });
});
            
            </script>





<form id="cambiar" method="post" action="/productos/2">

  

    <table><tr><td>nombre:</td>
        <td>
    
    
    
        <input type="text" name="NombreArticulo" value="">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
    </td>
    </tr>
    
    
    <tr><td>Seccion:</td>
        <td>
    
    
    
        <input type="text" name="Seccion" value="">
        {{csrf_field()}}
    
    </td>
    </tr>
    <tr><td>Precio:</td>
        <td>
    
    
    
        <input type="text" name="Precio" value="">
        {{csrf_field()}}
    
    </td>
    </tr>
    <tr><td>Fecha:</td>
        <td>
    
    
    
        <input type="text" name="Fecha" value="">
        {{csrf_field()}}
    
    </td>
    </tr>
    <tr><td>Pais de origen:</td>
        <td>
    
    
    
        <input type="text" name="PaisOrigen" value="">
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

		



@endsection

@section("pie")


@endsection