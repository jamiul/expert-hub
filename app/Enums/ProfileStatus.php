<?php

namespace App\Enums;

enum ProfileStatus: string
{
    case Draft = 'Draft';
    case InReview = 'In Review';
    case Approved = 'Approved';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
