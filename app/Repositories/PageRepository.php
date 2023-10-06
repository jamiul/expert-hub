<?php

namespace App\Repositories;

use App\Models\Page;

class PageRepository
{
    public Page $model;

    /**
     * @param Page $model
     */
    public function __construct(Page $model)
    {
    }
}
