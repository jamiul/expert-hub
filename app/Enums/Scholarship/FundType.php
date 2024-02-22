<?php

namespace App\Enums\Scholarship;

enum FundType: string
{
    case University = 'University Scholarships';
    case Project = 'Project Scholarships';
    case Govt = 'Govt. Scholarships';
    case Industry = 'Industry Scholarships';
    case GovtGrant = 'Govt. Business Grants';
    case IndustryGrant = 'Industry Business Grants';
    case Venture = 'Venture Capitalists Grants';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}
