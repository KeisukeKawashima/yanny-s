<?php

namespace Database\Factories;

use App\Models\SmokingSpot;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SmokingSpot>
 */
class SmokingSpotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model class
     *
     * @var SmokigSpot
     */
    protected $model_class = SmokingSpot::class;

    /**
     * Define the model's default state.
     *
     * @return array<string,float,boolean >
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
            'latitude' => $this->faker->latitude(-90, 90),
            'longitude' => $this->faker->longitude(-180, 180),
            'roofed' => $this->faker->boolean,
            'has_bench' => $this->faker->boolean,
            'electronic_cigarette_allowed' => $this->faker->boolean,
            'cigarette_allowed' => $this->faker->boolean,
            'walled' => $this->faker->boolean,
            'type' => $this->faker->randomElement(['outdoor', 'indoor', 'cafe', 'restaurant', 'general_smoking_area']),
        ];
    }
}
