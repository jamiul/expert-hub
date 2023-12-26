<?php

namespace App\Enums\Scholarship;

enum StudentType: string
{
    case Domestic = 'Domestic';
    case International = 'International';
    case Both = 'Domestic & International';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
