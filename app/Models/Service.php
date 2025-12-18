<?php

namespace App\Models;

use App\Enums\ServiceTypeEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Service extends Model
{
    use HasFactory;

    // Укажите таблицу, с которой будет работать модель
    protected $table = 'services';


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


    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }

    public function averageRating(): float
    {
        return round($this->reviews()->avg('rating') ?? 8, 1);
    }



    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
