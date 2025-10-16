<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    /**
     * Таблица для модели
     *
     * @var string
     */
    protected $table = 'reviews';

    /**
     * Массив массово присваиваемых атрибутов
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'service_id',
        'rating',
        'comment'
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
}
