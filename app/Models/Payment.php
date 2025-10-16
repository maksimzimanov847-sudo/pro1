<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\payment\paymentstatusEnum; // Убедитесь, что путь к enum правильный
use App\Enums\payment\paymentmethodEnum;  // Убедитесь, что путь к enum правильный

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
        'status' => paymentstatusEnum::class,
        'method' => \App\Enums\payment\paymentmethodEnum::class
    ];

    // Отношение "принадлежит" к модели Order
    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
