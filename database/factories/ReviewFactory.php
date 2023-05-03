<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    public function definition(): array
    {
        return [
            'star_rate' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'service_id' => Service::factory(),
        ];
    }
}
