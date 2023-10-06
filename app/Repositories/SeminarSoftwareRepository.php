<?php

namespace App\Repositories;

use App\Models\SeminarSoftware;

class SeminarSoftwareRepository
{
    public SeminarSoftware $model;

    /**
     * @param SeminarSoftware $model
     */
    public function __construct(SeminarSoftware $model)
    {
    }
}
