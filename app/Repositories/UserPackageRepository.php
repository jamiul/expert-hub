<?php

namespace App\Repositories;

use App\Models\UserPackage;

class UserPackageRepository
{
    public UserPackage $model;

    /**
     * @param UserPackage $model
     */
    public function __construct(UserPackage $model)
    {
    }
}
