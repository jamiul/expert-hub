<?php

namespace App\Repositories;

use App\Models\ProjectBid;

class ProjectBidRepository
{
    public ProjectBid $model;

    /**
     * @param ProjectBid $model
     */
    public function __construct(ProjectBid $model)
    {
    }
}
