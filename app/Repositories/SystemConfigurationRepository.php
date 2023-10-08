<?php

namespace App\Repositories;

use App\Models\SystemConfiguration;

class SystemConfigurationRepository
{
    public SystemConfiguration $model;

    /**
     * @param SystemConfiguration $model
     */
    public function __construct(SystemConfiguration $model)
    {
    }
}
