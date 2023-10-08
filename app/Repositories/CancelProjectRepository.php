<?php

namespace App\Repositories;

use App\Models\CancelProject;

class CancelProjectRepository
{
    public CancelProject $model;

    /**
     * @param CancelProject $model
     */
    public function __construct(CancelProject $model)
    {
    }
}
