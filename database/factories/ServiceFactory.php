<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'price' => $this->faker->randomNumber(),
            'description' => $this->faker->text(),
            'status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
