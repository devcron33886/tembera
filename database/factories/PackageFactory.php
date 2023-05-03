<?php

namespace Database\Factories;

use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PackageFactory extends Factory
{
    protected $model = Package::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->word(),
            'slug' => $this->faker->slug(),
            'body' => $this->faker->word(),
            'price' => $this->faker->randomNumber(),
            'unit_price' => $this->faker->word(),
            'status' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
