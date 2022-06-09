<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    //Relación entre marca y producto
    public function producto(){
        return $this -> hasMany(Producto::class);
    }
}
