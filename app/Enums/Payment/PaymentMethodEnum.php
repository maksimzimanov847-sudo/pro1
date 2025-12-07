<?php



namespace App\Enums\Payment;

enum PaymentMethodEnum: int
{
    case Method1=1;
    case Method2=2;


    public function label(): string
    {
        return match ($this) {
            self::Method1 => 'Метод1',
            self::Method2 =>'Метод2',
        };

    }
    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn($method) => [$method->value => $method->label()])
            ->toArray();
    }
}
