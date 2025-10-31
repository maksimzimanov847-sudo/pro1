<?php

namespace App\Enums;

enum orderStatusEnum:int
{
    case new = 1;
    case processing = 2;
    case finished = 3;
    case cancelled = 4;
}
