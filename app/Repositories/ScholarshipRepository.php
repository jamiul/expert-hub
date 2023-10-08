<?php

namespace App\Repositories;

use App\Models\Scholarship;

class ScholarshipRepository
{
    public Scholarship $model;

    /**
     * @param Scholarship $model
     */
    public function __construct(Scholarship $model)
    {
    }
}
