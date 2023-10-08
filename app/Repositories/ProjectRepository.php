<?php

namespace App\Repositories;

use App\Models\Project;

class ProjectRepository
{
    public Project $model;

    /**
     * @param Project $model
     */
    public function __construct(Project $model)
    {
    }
}
