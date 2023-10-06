<?php

namespace App\Repositories;

use App\Models\ScholarshipQualification;

class ScholarshipQualificationRepository
{
    public ScholarshipQualification $model;

    /**
     * @param ScholarshipQualification $model
     */
    public function __construct(ScholarshipQualification $model)
    {
    }
}
