@extends("../layouts.plantilla")


@section("cabecera")

@endsection

@section("contenido")

<ul>

@foreach($productos as $producto)

<a href="{{route('productos.edit', $producto->id)}}">xx</a>

<li>&nbsp;{{$producto->NombreArticulo}}&nbsp;{{$producto->Seccion}}&nbsp;{{$producto->Precio}}&nbsp;{{$producto->Fecha}}&nbsp;{{$producto->PaisOrigen}}</li>

<h1>{{$producto->ruta}}</h1>
<img src="{{ asset('images') . '/' . $producto->ruta }}">
<img src="{{ asset('images/'.$producto->ruta) }}">

@endforeach



</ul>


@endsection

@section("pie")


@endsection