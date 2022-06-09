@extends('layouts.menu')
@section('contenido')
    @if(!session('cart'))
        <p>Variable de Session no existente</p>
    @else
    <div class="row">
        {{ (session('cart'))[0]["name"] }}
        {{ (session('cart'))[0]["cant"] }}
    </div>
    <form action="{{ route('carrito.destroy' , 1) }}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar Carrito</button>
    </form>
    @endif
@endsection