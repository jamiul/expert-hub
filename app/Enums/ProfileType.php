<?php

namespace App\Enums;

enum ProfileType: string
{
    case Client = 'client';
    case Expert = 'expert';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
