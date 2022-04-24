<?php

namespace Database\Factories;

use App\Models\Plan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Plan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           /*  'name' => $this->faker->words(5),
            'description' => $this->faker->words(10),
            'voter_limit' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(2) */
        ];
    }


}
