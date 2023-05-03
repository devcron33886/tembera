<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'check_in_date' => Carbon::now(),
            'check_out_date' => Carbon::now(),
            'message' => $this->faker->word(),
            'status' => $this->faker->word(),
            'email' => $this->faker->unique()->safeEmail(),
            'mobile' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'package_id' => Package::factory(),
        ];
    }
}
