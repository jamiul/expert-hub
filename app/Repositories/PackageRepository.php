<?php

namespace App\Repositories;

use App\Models\Package;

class PackageRepository
{
    public Package $model;

    /**
     * @param Package $model
     */
    public function __construct(Package $model)
    {
    }
}
