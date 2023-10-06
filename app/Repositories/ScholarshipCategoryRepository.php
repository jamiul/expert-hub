<?php

namespace App\Repositories;

use App\Models\ScholarshipCategory;

class ScholarshipCategoryRepository
{
    public ScholarshipCategory $model;

    /**
     * @param ScholarshipCategory $model
     */
    public function __construct(ScholarshipCategory $model)
    {
    }
}
