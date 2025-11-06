<?php

namespace App\Enums;

enum ServiceTypeEnum:int
{
    case Test = 1;
    case Test2 = 2;

    public  function label(): string
    {
        return match ($this) {
            self::Test => 'Test',
            self::Test2 => 'Test 2',
        };
    }

    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($role)=>[$role->value=>$role->label()])
            ->toArray();
    }


}
