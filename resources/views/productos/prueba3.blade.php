@extends("../layouts.plantilla")


@section("cabecera")

@include('layouts._include')

@endsection

@section("contenido")

<p>prueba</p>

  <p>{{$id}}</p>
  @foreach($productos as $producto)

<p>{{$producto->ruta}}</p>

@endforeach

		



@endsection

@section("pie")


@endsection