@extends('layouts.menu')
@section('contenido')
<div class="row">
    <h1> {{ $producto -> nombre }}</h1>
</div>
<div class="row">
    <div class="col s4">
        <img width="100%" @if( is_null($producto -> imagen)) src="{{ asset('img/noimage.png') }}" @else src="{{ asset('img/' .$producto -> imagen)}}"  @endif>
    </div>
    <div class="col s4">
        <ul>
            <li><b>Descripcion:</b><br> {{  $producto -> desc  }} </li>
            <li><b>Precio:</b><br> ${{  $producto -> precio  }} </li>
            <li><b>Categoria:</b><br> {{  $producto -> Categoria -> nombre }}</li>
            <li><b>Marca:</b><br> {{  $producto -> Marca -> nombre }}</li>
        </ul>
    </div>
    <div class="col s4">
        <form method="post" action="{{ route('carrito.store') }}">
            @csrf
            <div class="row">
                <h3>Añadir al Carrito</h3>
            </div>
            <div class="row">
                <div class="col s4"></div>
                <div class="col s4 input-field">
                    <select name="cantidad" id="cantidad">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <label for="">cantidad</label>
                </div>
                <div class="col s4"></div>
            </div>
            <div class="row">
                <div class="col s4"></div>
                <div class="col s4">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Añadir</button>
                </div>
                <div class="col s4"></div>
            </div>
            <input type="hidden" name="prod_id" id="prod_id" value="{{ $producto -> id }}">
            <input type="hidden" name="name_id" id="name_id" value="{{ $producto -> nombre }}">
        </form>
    </div>
</div>

@endsection