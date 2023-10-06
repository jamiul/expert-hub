<?php

namespace App\Repositories;

use App\Models\City;

class CityRepository
{
    public City $model;

    /**
     * @param City $model
     */
    public function __construct(City $model)
    {
    }
}
