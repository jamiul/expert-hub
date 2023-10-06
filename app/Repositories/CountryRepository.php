<?php

namespace App\Repositories;

use App\Models\Country;

class CountryRepository
{
    public Country $model;

    /**
     * @param Country $model
     */
    public function __construct(Country $model)
    {
    }
}
