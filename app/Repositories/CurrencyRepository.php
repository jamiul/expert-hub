<?php

namespace App\Repositories;

use App\Models\Currency;

class CurrencyRepository
{
    public Currency $model;

    /**
     * @param Currency $model
     */
    public function __construct(Currency $model)
    {
    }
}
