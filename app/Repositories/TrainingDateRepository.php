<?php

namespace App\Repositories;

use App\Models\TrainingDate;

class TrainingDateRepository
{
    public TrainingDate $model;

    /**
     * @param TrainingDate $model
     */
    public function __construct(TrainingDate $model)
    {
    }
}
