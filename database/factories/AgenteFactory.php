<?php

namespace Database\Factories;

use App\Models\Agente;
use Illuminate\Database\Eloquent\Factories\Factory;

class AgenteFactory extends Factory
{
    protected $model = Agente::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nombres" => $this->faker->firstName,
            "apellidos" => $this->faker->lastName,
            "dni" => $this->faker->numberBetween(40000000, 70000000),
            "profesion" => $this->faker->jobTitle,
            "experiencia" => $this->faker->paragraph(3),
            "biografia" => $this->faker->paragraph(3),
            "email" => $this->faker->email,
            "telefono" => $this->faker->phoneNumber,
            "url_facebook" => "https://www.facebook.com/",
            "url_tweeter" => "https://twitter.com/",
            "url_linkedin" => "https://www.linkedin.com/",
            "premios" => rand(10,30),
            "clientes" => rand(10, 100),
            "proyectos" => rand(1, 100),
            "foto" => env('APP_URL') ."/img/agentes/".rand(1,12).".jpg"
        ];
    }
}
