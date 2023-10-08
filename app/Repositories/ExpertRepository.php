<?php

namespace App\Repositories;

use App\Models\Expert;

class ExpertRepository
{
    public Expert $model;

    /**
     * @param Expert $model
     */
    public function __construct(Expert $model)
    {
    }
}
