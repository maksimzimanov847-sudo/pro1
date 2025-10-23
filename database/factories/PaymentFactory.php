<?php

namespace Database\Factories;

use App\Enums\payment\paymentmethodEnum;
use App\Enums\payment\paymentstatusEnum;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'status' => fake()->randomElement(paymentstatusEnum::cases()),
            'method' => fake()->randomElement(paymentmethodEnum::cases()),

        ];
    }
}
