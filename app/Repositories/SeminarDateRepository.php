<?php

namespace App\Repositories;

use App\Models\SeminarDate;

class SeminarDateRepository
{
    public SeminarDate $model;

    /**
     * @param SeminarDate $model
     */
    public function __construct(SeminarDate $model)
    {
    }
}
