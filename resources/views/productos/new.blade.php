@extends('layouts.menu')
@section('contenido')
@if( session('msj'))
    <div class="row">
        <span>{{ session('msj') }}</span>
    </div>
@endif
<div class="row">
    <h1 class="blue-grey-text text-darken-2">Agregar Producto</h1>
</div>
<div class="row">
    <form class="col s12" method="post" action="{{ route('productos.store') }}">
        @csrf
        <div class="row">
            <div class="input-field col s7">
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}"> 
                <label for="nombre">Nombre</label>
                <span class="red-text text-darken-1">{{ $errors->first('nombre') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s7">
                <textarea name="desc" id="desc" class="materialize-textarea">{{ old('desc') }}</textarea>
                <label for="desc">Descripción</label>
                <span class="red-text text-darken-1">{{ $errors->first('desc') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s7">
                <input type="text" name="precio" id="precio" value="{{ old('precio') }}">
                <label for="precio">Precio</label>
                <span class="red-text text-darken-1">{{ $errors->first('precio') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s7">
                <select name="marca" id="marca">
                        <option value="">Elija marca</option>
                    @foreach($marcas as $m)
                        <option value="{{ $m -> id }}" @select(old('marca') == $m)>{{ $m -> nombre }}</option>
                    @endforeach
                </select>
                <label for="marca">Elija su marca</label>
                <span class="red-text text-darken-1">{{ $errors->first('marca') }}</span>
            </div>
        </div>
        <div class="row">
        <div class="input-field col s7">
                <select name="categoria" id="categoria">
                    <option value="">Elija Categoria</option>
                    @foreach($categorias as $c)
                        <option value="{{ $c -> id }}">{{ $c -> nombre }}</option>
                    @endforeach
                </select>
                <label for="marca">Elija su categoria</label>
                <span class="red-text text-darken-1">{{ $errors->first('precio') }}</span>
            </div>
        </div>
        <div class="row">
            <div class="file-field input-field col s7">
                <div class="btn">
                    <span>Imagen</span>
                    <input type="file" name="img" id="img">
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