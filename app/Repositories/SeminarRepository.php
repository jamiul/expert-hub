<?php

namespace App\Repositories;

use App\Models\Seminar;

class SeminarRepository
{
    public Seminar $model;

    /**
     * @param Seminar $model
     */
    public function __construct(Seminar $model)
    {
    }
}
