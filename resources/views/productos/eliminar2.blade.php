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
    //alert("El texto del botón es --> " + $("#cambiar").attr("action"));
  });
});
            
            </script>


<form id="cambiar" method="post" action="#">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="" value="ELiminar registro">

    </form>

		



@endsection

@section("pie")


@endsection