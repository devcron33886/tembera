<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->word(),
            'status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'author_id' => User::factory(),
        ];
    }
}
