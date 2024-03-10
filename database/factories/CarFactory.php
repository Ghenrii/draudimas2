<?php

namespace Database\Factories;

use App\Models\Car; 
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    protected $model = Car::class;

    public function definition()
    {
        return [
            'reg_number' => $this->faker->unique()->regexify('[A-Z0-9]{6}'),
            'brand' => $this->faker->randomElement(['Toyota', 'Ford', 'Honda', 'BMW']),
            'model' => $this->faker->word,
            'owner_id' => function () {
                return \App\Models\Owner::factory()->create()->id;
            }
        ];
    }
}
