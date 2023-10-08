<?php

namespace App\Repositories;

use App\Models\Option;

class OptionRepository
{
    public Option $model;

    /**
     * @param Option $model
     */
    public function __construct(Option $model)
    {
    }
}
