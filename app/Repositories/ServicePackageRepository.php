<?php

namespace App\Repositories;

use App\Models\ServicePackage;

class ServicePackageRepository
{
    public ServicePackage $model;

    /**
     * @param ServicePackage $model
     */
    public function __construct(ServicePackage $model)
    {
    }
}
