<?php

namespace App\Repositories;

use App\Models\PageOptimization;

class PageOptimizationRepository
{
    public PageOptimization $model;

    /**
     * @param PageOptimization $model
     */
    public function __construct(PageOptimization $model)
    {
    }
}
