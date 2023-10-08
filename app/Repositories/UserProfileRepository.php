<?php

namespace App\Repositories;

use App\Models\UserProfile;

class UserProfileRepository
{
    public UserProfile $model;

    /**
     * @param UserProfile $model
     */
    public function __construct(UserProfile $model)
    {
    }
}
