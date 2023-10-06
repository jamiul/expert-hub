<?php

namespace App\Repositories;

use App\Models\ScholarshipLevel;

class ScholarshipLevelRepository
{
    public ScholarshipLevel $model;

    /**
     * @param ScholarshipLevel $model
     */
    public function __construct(ScholarshipLevel $model)
    {
    }
}
