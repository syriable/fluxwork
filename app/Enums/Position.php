<?php

declare(strict_types=1);

namespace App\Enums;

enum Position: string
{
    case Bottom = 'bottom';
    case Top = 'top';
    case Inside = 'inside';
}
