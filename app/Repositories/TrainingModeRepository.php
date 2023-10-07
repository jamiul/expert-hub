<?php

namespace App\Repositories;

use App\Models\TrainingMode;

class TrainingModeRepository
{
    public TrainingMode $model;

    /**
     * @param TrainingMode $model
     */
    public function __construct(TrainingMode $model)
    {
    }
}
