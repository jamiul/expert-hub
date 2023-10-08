<?php

namespace App\Repositories;

use App\Models\ScholarshipUniversity;

class ScholarshipUniversityRepository
{
    public ScholarshipUniversity $model;

    /**
     * @param ScholarshipUniversity $model
     */
    public function __construct(ScholarshipUniversity $model)
    {
    }
}
