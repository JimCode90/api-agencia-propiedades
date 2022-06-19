<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaPropiedad extends Model
{
    use HasFactory;
    protected $table = "categoria_propiedades";
    protected $fillable = [
        "descripcion"
    ];
}
