<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public User $model;

    /**
     * @param User $model
     */
    public function __construct(User $model)
    {
    }
}
