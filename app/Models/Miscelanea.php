<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Miscelanea extends Model
{
    use HasFactory;
    protected $fillable =['Articulo','Precio_v','Precio_c','Existencia_m','Existencia_mx','Categoria','Fabricante','Existencia_a','Imagen'];
   
}
