<?php

namespace App\Repositories;

use App\Models\SeminarMode;

class SeminarModeRepository
{
    public SeminarMode $model;

    /**
     * @param SeminarMode $model
     */
    public function __construct(SeminarMode $model)
    {
    }
}
