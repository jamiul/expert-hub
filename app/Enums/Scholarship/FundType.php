<?php

namespace App\Enums\Scholarship;

enum FundType: string
{
    case University = 'University';
    case Govt = 'Govt';
    case Project = 'Project';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
