<?php

namespace App\Repositories;

use App\Models\ProjectMilestone;

class ProjectMilestoneRepository
{
    public ProjectMilestone $model;

    /**
     * @param ProjectMilestone $model
     */
    public function __construct(ProjectMilestone $model)
    {
    }
}
