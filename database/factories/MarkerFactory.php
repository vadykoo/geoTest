<?php

namespace Database\Factories;

use App\Models\Marker;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Marker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'lat' => $this->faker->latitude($min = -90, $max = 90),
            'long' => $this->faker->longitude($min = -180, $max = 180),
            'description' => $this->faker->sentence(),
            'is_public' => rand(0,1),
        ];
    }
}
