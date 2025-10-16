<?php

namespace App\Enums\payment;

enum paymentstatusEnum:int
{
    case Active = 1;
    case paid = 2;
    case failed = 3;

}
