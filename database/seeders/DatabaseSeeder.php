<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ServiceFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Service::factory(10)->create();
        Review::factory(10)->create();
        Order::factory(10)->create();
        Payment::factory(10)->create();


    }
}
