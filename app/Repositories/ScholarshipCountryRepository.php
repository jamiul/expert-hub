<?php

namespace App\Repositories;

use App\Models\ScholarshipCountry;

class ScholarshipCountryRepository
{
    public ScholarshipCountry $model;

    /**
     * @param ScholarshipCountry $model
     */
    public function __construct(ScholarshipCountry $model)
    {
    }
}
