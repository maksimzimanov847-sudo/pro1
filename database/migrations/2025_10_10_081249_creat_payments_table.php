<?php

use App\Enums\payment\paymentstatusEnum;
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

        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->
            constrained('orders');
            $table->tinyInteger('status')->default(paymentstatusEnum::Active->value);
            $table->tinyInteger('method');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
