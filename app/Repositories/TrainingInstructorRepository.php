<?php

namespace App\Repositories;

use App\Models\TrainingInstructor;

class TrainingInstructorRepository
{
    public TrainingInstructor $model;

    /**
     * @param TrainingInstructor $model
     */
    public function __construct(TrainingInstructor $model)
    {
    }
}
