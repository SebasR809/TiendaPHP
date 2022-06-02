@extends('layouts.menu')
@section('contenido')
    <div class="row">
        <h1>Catálogo de Productos</h1>
    </div>
    @foreach($productos as $p)
    <div class="card small">
        <div class="card-image waves-effect waves-block waves-light col s4" >
            <img class="activator" width="100" height="100" @if($p -> imagen === null) src="{{ asset('img/noimage.png') }} @else src="{{ asset('img/'.$p -> imagen) }}  @endif ">
        </div>
    <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">{{ $p -> nombre }}<i class="material-icons right">Ver más...</i></span>
            <sub>Precio</sub><p>{{ $p -> precio}}</p>
            <p><a href="#">Agregar al carrito</a></p>
    </div>
    <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">{{ $p -> nombre }}<i class="material-icons right">Fechar</i></span>
        <ul>
            <li><sub>Precio</sub>{{ $p -> desc }}</li>
            <li>{{ $p -> precio}}</li>
            <li>{{ $p -> categoria() -> nombre }}</li>
        </ul>
    </div>
  </div>
    @endforeach
@endsection