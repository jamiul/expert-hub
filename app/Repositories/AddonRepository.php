<?php

namespace App\Repositories;

use App\Models\Addon;

class AddonRepository extends AbstractRepository
{
    /**
     * @var Addon
     */
    public Addon $model;

    public function __construct(Addon $model)
    {
    }
}
