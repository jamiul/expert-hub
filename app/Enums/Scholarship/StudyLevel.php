<?php

namespace App\Enums\Scholarship;

enum StudyLevel: string
{
    case BachelorsDegree = 'Bachelor\'s Degree';
    case MastersByCoursework = 'Master\'s by Coursework';
    case MasterByResearch = 'Master by Research';
    case MasterOfPhilosophy = 'Master of Philosophy';
    case DoctorsOfPhilosophy = 'Doctors of Philosophy';
    case ProfessionalDoctorate = 'Professional Doctorate';

    public function getLabel(): ?string
    {
        return $this->value;
    }
}