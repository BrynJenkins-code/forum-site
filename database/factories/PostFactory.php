<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
            'user_id' => $this->faker->numberBetween(1,51),
            'category_id' => $this->faker->numberBetween(1,7),
            'post_title' => $this->faker->sentence(),
            'post_content'=> $this->faker->paragraph(),
            'views'=>$this->faker->numberBetween(1,100000),
        ];
    }
}
