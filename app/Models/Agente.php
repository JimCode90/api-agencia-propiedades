<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agente extends Model
{
    use HasFactory;
    protected $table = "agentes";
    protected $fillable = [
        "nombres",
        "apellidos",
        "dni",
        "profesion",
        "experiencia",
        "biografia",
        "telefono",
        "url_facebook",
        "url_tweeter",
        "url_linkedin",
        "premios",
        "clientes",
        "proyectos",
        "foto",
    ];
}
