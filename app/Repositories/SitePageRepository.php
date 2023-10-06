<?php

namespace App\Repositories;

use App\Models\SitePage;

class SitePageRepository
{
    public SitePage $model;

    /**
     * @param SitePage $model
     */
    public function __construct(SitePage $model)
    {
    }
}
