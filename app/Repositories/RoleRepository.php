<?php

namespace App\Repositories;

use App\Models\Role;

class RoleRepository
{
    public Role $model;

    /**
     * @param Role $model
     */
    public function __construct(Role $model)
    {
    }
}
