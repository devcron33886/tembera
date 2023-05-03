<?php

namespace Database\Factories;

use App\Models\Testimonial;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class TestimonialFactory extends Factory
{
    protected $model = Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'title' => $this->faker->word(),
            'message' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
