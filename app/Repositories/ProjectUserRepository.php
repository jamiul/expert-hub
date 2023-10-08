<?php

namespace App\Repositories;

use App\Models\ProjectUser;

class ProjectUserRepository
{
    public ProjectUser $model;

    /**
     * @param ProjectUser $model
     */
    public function __construct(ProjectUser $model)
    {
    }
}
