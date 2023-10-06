<?php

namespace App\Repositories;

use App\Models\SeminarInstructor;

class SeminarInstructorRepository
{
    public SeminarInstructor $model;

    /**
     * @param SeminarInstructor $model
     */
    public function __construct(SeminarInstructor $model)
    {
    }
}
