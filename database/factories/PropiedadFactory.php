<?php

namespace Database\Factories;
use App\Models\Agencia;
use App\Models\CategoriaPropiedad;
use App\Models\Propiedad;
use App\Models\TipoPropiedad;
use Illuminate\Database\Eloquent\Factories\Factory;


class PropiedadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Propiedad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_tipo_propiedad' => function(){
                return TipoPropiedad::all()->random();
            },
            'id_agencia' => function(){
                return Agencia::all()->random();
            },
            'id_categoria_propiedad' => function(){
                return CategoriaPropiedad::all()->random();
            },
            'nombre' => $this->faker->sentence(1),
            'precio' => $this->faker->randomFloat(2, 400, 1400),
            'descripcion' => $this->faker->paragraph(2),
            'direccion' => $this->faker->address,
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'nro_dormitorios' => rand(1,8),
            'nro_bathroom' => rand(1,2),
            'nro_garage' => rand(1,3),
            'area' => $this->faker->randomFloat(2, 10, 100), //https://via.placeholder.com/270x225
            'imagen' => env('APP_URL') ."/img/propertes/".rand(1,20).".jpg"
        ];
    }
}
