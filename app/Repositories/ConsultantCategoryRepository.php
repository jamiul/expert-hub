<?php

namespace App\Repositories;

use App\Models\ConsultantCategory;

class ConsultantCategoryRepository
{
    public ConsultantCategory $model;

    /**
     * @param ConsultantCategory $model
     */
    public function __construct(ConsultantCategory $model)
    {
    }
}
