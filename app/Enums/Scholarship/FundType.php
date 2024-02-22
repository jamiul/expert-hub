<?php

namespace App\Enums\Scholarship;

enum FundType: string
{
    case University = 'University Scholarships';
    case Project = 'Project Scholarships';
    case Govt = 'Government Scholarships';
    case Industry = 'Industry-sponsored Scholarships';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
