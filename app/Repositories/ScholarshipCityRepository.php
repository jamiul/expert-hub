<?php

namespace App\Repositories;

use App\Models\ScholarshipCity;

class ScholarshipCityRepository
{
    public ScholarshipCity $model;

    /**
     * @param ScholarshipCity $model
     */
    public function __construct(ScholarshipCity $model)
    {
    }
}
