<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Primera ruta
Route::get('sebas', function(){
    echo "Primera Prueba pa";
});
//Ruta de arreglos(arrays)
Route::get('array',function(){
    $estudiantes = [ 
        "Da" => "Daniela",
        "Al" => "Alejandra",
        "Ni" => "Nicol",
    ];
    //Agregar elementos a PHP
    $estudiantes[ ] = "Sebastian";
    echo "<pre>";
    var_dump ($estudiantes);
    echo "</pre>";
    //Mostrar el array
    foreach ($estudiantes as $n) {
        echo $n."<hr>";
    }
});
Route::get('pais',function(){
    //Arreglo de paises
    $paises = [ 
        "Brasil" => [
            "capital" => "Brasilia",
            "moneda" => "Reales",
            "poblacion" => 214,
            "ciudades principales" => [
                "Rio de Janeiro",
                "Sao Paulo",
            ]
        ],
        "Colombia" => [
            "capital" => "Bogota",
            "moneda" => "Peso colombiano",
            "poblacion" => 51,
            "ciudades principales" => [
                "Medellin",
                "Cali",
                "Barranquilla"
            ]
        ],
        "Peru" => [
            "capital" => "Lima",
            "moneda" => "Sol",
            "poblacion" => 32,
            "ciudades principales" => [
                "Arequipa",
                "Trujillo"
            ]
        ],
        "Paraguay" => [
            "capital" => "Asunción",
            "moneda" => "guarani",
            "poblacion" => 7,
            "ciudades principales" => [
                "Luque"
            ]
        ],
        "Alemania" => [
            "capital" => "Berlín",
            "moneda" => "Euro",
            "poblacion" => 83,
            "ciudades principales" => [
                "Dormund",
                "Frankfurt",
                "Hamburgo"
            ]
        ],
        "Francia" => [
            "capital" => "París",
            "moneda" => "Euro",
            "poblacion" => 67,
            "ciudades principales" => [
                "Lyon",
                "Marsella",
            ]
        ]
    ];
    return view('paises')->with("paises",$paises);
});