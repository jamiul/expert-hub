<?php

namespace App\Repositories;

use App\Models\ProjectCategory;

class ProjectCategoryRepository
{
    public ProjectCategory $model;

    /**
     * @param ProjectCategory $model
     */
    public function __construct(ProjectCategory $model)
    {
    }
}
