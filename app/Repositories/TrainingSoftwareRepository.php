<?php

namespace App\Repositories;

use App\Models\TrainingSoftware;

class TrainingSoftwareRepository
{
    public TrainingSoftware $model;

    /**
     * @param TrainingSoftware $model
     */
    public function __construct(TrainingSoftware $model)
    {
    }
}
