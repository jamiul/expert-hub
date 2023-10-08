<?php

namespace App\Repositories;

use App\Models\WorkExperience;

class WorkExperienceRepository
{
    public WorkExperience $model;

    /**
     * @param WorkExperience $model
     */
    public function __construct(WorkExperience $model)
    {
    }
}
