<?php

namespace App\Enums\Payment;

enum PaymentStatusEnum: int
{
    case Active = 1;//Активный
    case Paid = 2;//Оплаченный
    case Finished = 3;//Законченный

    public function label(): string
    {
        return match ($this) {
            self::Active => 'Активный',
            self::Paid => 'Оплаченный',
            self::Finished => 'Законченный',

        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($status) => [$status->value => $status->label()])
            ->toArray();
    }

}
