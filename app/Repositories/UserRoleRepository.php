<?php

namespace App\Repositories;

use App\Models\UserRole;

class UserRoleRepository
{
    public UserRole $model;

    /**
     * @param UserRole $model
     */
    public function __construct(UserRole $model)
    {
    }
}
