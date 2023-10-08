<?php

namespace App\Repositories;

use App\Models\UserBadge;

class UserBadgeRepository
{
    public UserBadge $model;

    /**
     * @param UserBadge $model
     */
    public function __construct(UserBadge $model)
    {
    }
}
