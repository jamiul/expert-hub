<?php

namespace App\Repositories;

use App\Models\Badge;

class BadgeRepository
{
    public Badge $model;

    /**
     * @param Badge $model
     */
    public function __construct(Badge $model)
    {
    }
}
