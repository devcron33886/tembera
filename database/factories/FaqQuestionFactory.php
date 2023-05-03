<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\FaqQuestion;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class FaqQuestionFactory extends Factory
{
    protected $model = FaqQuestion::class;

    public function definition(): array
    {
        return [
            'question' => $this->faker->word(),
            'answer' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'category_id' => Category::factory(),
        ];
    }
}
