<?php

namespace Database\Seeders;

use App\Models\Agencia;
use App\Models\Agente;
use App\Models\Comentario;
use App\Models\Post;
use App\Models\Propiedad;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table("tipo_propiedades")->insert([
            'descripcion' => 'En Venta',
        ]);
        DB::table("tipo_propiedades")->insert([
            'descripcion' => 'En Alquiler',
        ]);
        DB::table("categoria_propiedades")->insert([
            'descripcion' => 'Apartamento',
        ]);
        DB::table("categoria_propiedades")->insert([
            'descripcion' => 'Casa',
        ]);
        DB::table("categoria_propiedades")->insert([
            'descripcion' => 'Terreno/Lote',
        ]);
        DB::table("categoria_propiedades")->insert([
            'descripcion' => 'Local Comercial',
        ]);
        DB::table("categoria_propiedades")->insert([
            'descripcion' => 'Habitación',
        ]);
        DB::table("categoria_propiedades")->insert([
            'descripcion' => 'Oficina Comercial',
        ]);
        DB::table("categoria_propiedades")->insert([
            'descripcion' => 'Otros',
        ]);
        User::factory(10)->create();
        Agencia::factory(12)->create();
        Agente::factory(12)->create();
        Post::factory(10)->create();
        Comentario::factory(30)->create();
        Propiedad::factory(20)->create();

    }
}
