<?php

namespace App\Repositories;

use App\Models\Training;

class TrainingRepository
{
    public Training $model;

    /**
     * @param Training $model
     */
    public function __construct(Training $model)
    {
    }
}
