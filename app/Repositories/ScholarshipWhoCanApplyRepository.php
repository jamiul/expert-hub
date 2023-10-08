<?php

namespace App\Repositories;

use App\Models\ScholarshipWhoCanApply;

class ScholarshipWhoCanApplyRepository
{
    public ScholarshipWhoCanApply $model;

    /**
     * @param ScholarshipWhoCanApply $model
     */
    public function __construct(ScholarshipWhoCanApply $model)
    {
    }
}
