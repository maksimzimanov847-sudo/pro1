<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\servicesTypeEnum; // Убедитесь, что путь к enum правильный

class service extends Model
{
    use HasFactory;

    // Укажите таблицу, с которой будет работать модель
    protected $table = 'services';

    // Укажите поля, которые можно массово присваивать
    protected $fillable = [
        'name',
        'description',
        'price',
        'type'
    ];

    // Укажите приведение типов
    protected $casts = [
        'type' => servicesTypeEnum::class
    ];

    // Отношение "один ко многим" с моделью Order
    public function orders(): HasMany
    {
        return $this->hasMany(order::class);
    }

}
