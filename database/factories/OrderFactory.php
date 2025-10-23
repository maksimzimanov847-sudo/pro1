<?php

namespace Database\Factories;

use App\Enums\orderstatusEnum;
use App\Enums\servicestypeEnum;
use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'user_id'=> \App\Models\User::factory(),
            'service_id'=> \App\Models\Service::factory(),
            'status'=>fake()->randomElement(orderstatusEnum::cases()),
            "total"=>fake()->numberBetween(10000, 1000000),

        ];
    }
}
