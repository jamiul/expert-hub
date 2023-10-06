<?php

namespace App\Repositories;

use App\Models\Service;

class ServiceRepository
{
    public Service $model;

    /**
     * @param Service $model
     */
    public function __construct(Service $model)
    {
    }
}
