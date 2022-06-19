<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => function() {
                return User::all()->random();
            },
            'titulo' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'image' => env('APP_URL') ."/img/posts/".rand(1,9).".jpg",
            'contenido' => $this->faker->paragraph(10),
            'resumen' => $this->faker->paragraph(2),
        ];
    }
}
