<?php

namespace App\Models;

use App\Enums\ServiceTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Enums\ServicesTypeEnum; // Убедитесь, что путь к enum правильный

class Service extends Model
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
        'type' => ServiceTypeEnum::class
    ];

    // Отношение "один ко многим" с моделью Order
    public function orders(): HasMany
    {
        return $this->hasMany(order::class);
    }

}
