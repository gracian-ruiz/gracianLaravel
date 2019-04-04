@extends("../layouts.plantilla")


@section("cabecera")

@include('layouts._include')

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


@if (0==0)
 
@include('layouts._include')


@endif





<form id="cambiar" method="post" action="#">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="DELETE">
    <input type="submit" name="" value="ELiminar registro">

    </form>


    <a href="{{ url('probarinclude/4') }}">prueba3</a>

		



@endsection

@section("pie")


@endsection