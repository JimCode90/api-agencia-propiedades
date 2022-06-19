<?php

namespace Database\Factories;

use App\Models\Agencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgenciaFactory extends Factory
{

    protected $model = Agencia::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombre" => $this->faker->company,
            "descripcion" => $this->faker->paragraph(3),
            "direccion" => $this->faker->address,
            "email" => $this->faker->email,
            "telefono" => $this->faker->phoneNumber,
            "ciudad" => $this->faker->city,
            "codigo_postal" => $this->faker->postcode,
            "website" => $this->faker->freeEmailDomain,
        ];
    }
}
