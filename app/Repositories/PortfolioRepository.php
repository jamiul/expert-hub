<?php

namespace App\Repositories;

use App\Models\Page;
use App\Models\Portfolio;

class PortfolioRepository
{
    public Portfolio $model;

    /**
     * @param Portfolio $model
     */
    public function __construct(Portfolio $model)
    {
    }
}
