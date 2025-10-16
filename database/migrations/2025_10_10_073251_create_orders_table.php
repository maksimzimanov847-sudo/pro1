<<?php

use App\Enums\orderstatusEnum;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')
                ->cascadeOnDelete();
            $table->foreignId('service_id')->constrained('services')
                ->cascadeOnDelete();

            // Исправлено использование enum
            $table->tinyInteger('status')->default(OrderStatusEnum::new->value);

            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Исправлено использование Schema
        Schema::dropIfExists('orders');
    }
};

