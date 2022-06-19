<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;
    protected $table = "propiedades";

    protected $fillable = [
        'id_tipo_propiedad',
        'id_categoria_propiedad',
        'id_agencia',
        'nombre',
        'precio',
        'descripcion',
        'direccion',
        'lat',
        'lng',
        'nro_dormitorios',
        'nro_bathroom',
        'nro_garage' ,
        'area',
        'imagen'
    ];

    public function categoria(){
        return $this->belongsTo(CategoriaPropiedad::class, 'id_categoria_propiedad', 'id');
    }

    public function tipo_propiedad(){
        return $this->belongsTo(TipoPropiedad::class, 'id_tipo_propiedad', 'id');
    }

    public function agencia() {
        return $this->belongsTo(Agencia::class, 'id_agencia', 'id');
    }
}
