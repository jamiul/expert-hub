<?php

namespace App\Repositories;

use App\Models\Permission;

class PermissionRepository
{
    public Permission $model;

    /**
     * @param Permission $model
     */
    public function __construct(Permission $model)
    {
    }
}
