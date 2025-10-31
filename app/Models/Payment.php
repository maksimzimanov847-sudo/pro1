<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\payment\paymentStatusEnum; // Убедитесь, что путь к enum правильный
use App\Enums\payment\paymentmetHodEnum;  // Убедитесь, что путь к enum правильный

class Payment extends Model
{
    use HasFactory;

    // Укажите таблицу, с которой будет работать модель
    protected $table = 'payments';

    // Укажите поля, которые можно массово присваивать
    protected $fillable = [
        'order_id',
        'status',
        'method'
    ];

    // Укажите приведение типов
    protected $casts = [
        'status' => paymentStatusEnum::class,
        'method' => \App\Enums\payment\paymentmetHodEnum::class
    ];

    // Отношение "принадлежит" к модели Order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
