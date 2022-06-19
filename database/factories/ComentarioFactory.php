<?php

namespace Database\Factories;

use App\Models\Comentario;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentarioFactory extends Factory
{
    protected $model = Comentario::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => function() {
                return Post::all()->random();
            },
            'autor' => $this->faker->name,
            'comentario' => $this->faker->sentence,
            'voto' => $this->faker->numberBetween(0,10)
        ];
    }
}
