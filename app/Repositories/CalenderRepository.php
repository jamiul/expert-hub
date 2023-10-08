<?php

namespace App\Repositories;

use App\Models\Calender;

class CalenderRepository
{
    public Calender $model;

    /**
     * @param Calender $model
     */
    public function __construct(Calender $model)
    {
    }
}
