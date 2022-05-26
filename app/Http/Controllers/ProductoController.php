<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "Aca va a ir el catalogo de productos";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Selección de todas las marcas
        $marcas = Marca::all();
        // Selección de todas las categorias
        $categorias = Categoria::all();
        //Mostrar la vista, con los datos de marca y categoria
        return view('productos.new')->with('marcas',$marcas)->with('categorias',$categorias);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        //Establecer las reglas de validación que apliquen a cada campo
        $reglas = [
            "nombre" => 'required|alpha',
            "desc" => 'required|min:20|max:50',
            "precio" => 'required|numeric',
            "marca" => 'required',
            "categoria" => 'required'
        ];

        $mensajes = [
            "required" => "Campo obligatorio",
            "alpha" => "Solo se pueden usar letras",
            "min" => "Mínimo de caracteres: 20",
            "max" => "Máximo de caracteres: 50",
            "numeric" => "Solo se pueden usar números"
        ];

        //Crear el objeto validador
        $v = validator::make($r->all(),$reglas,$mensajes);

        //Validar la input data
        if ($v -> fails()) {
            //Validación Fallida
                //Redireccionar al formulario
                return redirect('productos/create')->withErrors($v)->withInput();

        } else {
            //Validación Correcta
            //Crear un nuevo producto
                $p = new Producto;
            //Asignar valores a los atributos del objeto
                $p -> nombre = $r -> nombre;
                $p -> desc = $r -> desc;
                $p -> precio = $r -> precio;
                $p -> marca_id = $r -> marca;
                $p -> categoria_id = $r -> categoria;
            //Guardar en db
                $p -> save();
            //Redireccionar al formulario con mensaje de exito (session)
                return redirect('productos/create')->with('msj',"Se ha registrado con exito el producto");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($producto)
    {
        echo "Aca van los detalles del producto con id: $producto";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($producto)
    {
        echo "Aca va el formulario para actualizar el producto: $producto";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
