<?php

namespace App\Enums;

use phpDocumentor\Reflection\Types\Self_;

enum OrderStatusEnum: int
{
    case New = 1;
    case Pending = 2;
    case Finished = 3;
    case Cancelled = 4;

    public  function label(): string
    {
        return match ($this) {
            self::New => 'Новый',
            self::Pending => 'В процессе',
            self::Finished => 'Завершен',
            self::Cancelled => 'Отменен',
        };
    }
    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($status) => [$status->value => $status->label()])
            ->toArray();
    }
}
