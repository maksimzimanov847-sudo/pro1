<?php

namespace App\Models;


use App\Enums\OrderStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    /**
     * Таблица для модели
     *
     * @var string
     */
    protected $table = 'orders';

    /**
     * Массив массово присваиваемых атрибутов
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'service_id',
        'status',
        'total'
    ];

    /**
     * Приведение типов атрибутов
     *
     * @var array
     */
    protected $casts = [
        'status' => OrderStatusEnum::class
    ];

    /**
     * Отношение к пользователю
     *
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Отношение к сервису
     *
     * @return BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    /**
     * Отношение к платежам
     *
     * @return HasMany
     */
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class);
    }
}
