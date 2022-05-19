@extends('layouts.menu')
@section('contenido')
<div class="row">
    <h1 class="blue-grey-text text-darken-2">Agregar Producto</h1>
</div>
<div class="row">
    <form class="col s12">
        <div class="row">
            <div class="input-field col s7">
                <input type="text" id="nombre" name="nombre"> 
                <label for="nombre">Nombre</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s7">
                <textarea name="desc" id="desc" class="materialize-textarea"></textarea>
                <label for="desc">Descripción</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s7">
                <input type="number" id="precio" name="precio">
                <label for="precio">Precio</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s7">
                <select name="" id="marca">
                    @foreach($marcas as $m)
                        <option value="">{{ $m -> nombre }}</option>
                    @endforeach
                </select>
                <label for="marca">Elija su marca</label>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s7">
                <div class="btn">
                    <span>Imagen</span>
                    <input type="file">
                </div>
                <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                </div>
            </div>
        </div>  
        <div class="row">
        <button class="btn waves-effect waves-light" type="submit" name="action">Agregar</button>
        </div>
    </form>
</div> 
@endsection