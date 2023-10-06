<?php

namespace App\Repositories;

use App\Models\ScholarshipFieldStudy;

class ScholarshipFieldStudyRepository
{
    public ScholarshipFieldStudy $model;

    /**
     * @param ScholarshipFieldStudy $model
     */
    public function __construct(ScholarshipFieldStudy $model)
    {
    }
}
