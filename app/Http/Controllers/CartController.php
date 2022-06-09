<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        //Mostrar el contenido de la variable de session
        return view('carrito.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //Crear un arreglo de producto
        $p = [
            [
                "id" => $request -> prod_id,
                "name" => $request -> name_id,
                "cant" => $request -> cantidad
            ]
        ];

        //Crear una variable de session con el primer producto
        session(['cart' => $p]);

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //Eliminar la varible de session
        session() -> forget('cart');
    }
}
