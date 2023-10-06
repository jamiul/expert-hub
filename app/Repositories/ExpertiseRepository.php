<?php

namespace App\Repositories;

use App\Models\Expertise;

class ExpertiseRepository
{
    public Expertise $model;

    /**
     * @param Expertise $model
     */
    public function __construct(Expertise $model)
    {
    }
}
