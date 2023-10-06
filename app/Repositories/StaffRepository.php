<?php

namespace App\Repositories;

use App\Models\Staff;

class StaffRepository
{
    public Staff $model;

    /**
     * @param Staff $model
     */
    public function __construct(Staff $model)
    {
    }
}
