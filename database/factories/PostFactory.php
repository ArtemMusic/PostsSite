<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
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
            "title" => $this->faker->words(rand(1,3),true),
            "content" => $this->faker->text(100),
            "likes" => random_int(0,100),
            "images" => $this->faker->text(5),
            "status" => rand(0,1),
            "category_id" => Category::get()->random()->id
        ];
    }
}
