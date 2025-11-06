<?php

namespace Database\Factories;

use App\Enums\ServicesTypeEnum;
use App\Enums\ServiceTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name'=>fake()->words(3, true),
            'description'=>fake()->paragraph(),
            'price'=>fake()->numberBetween(100, 10000),
            'type'=>fake()->randomElement(ServiceTypeEnum::cases()),
        ];
    }
}
