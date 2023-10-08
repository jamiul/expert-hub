<?php

namespace App\Repositories;

use App\Models\EducationDetail;

class EducationDetailRepository
{
    public EducationDetail $model;

    /**
     * @param EducationDetail $model
     */
    public function __construct(EducationDetail $model)
    {
    }
}
