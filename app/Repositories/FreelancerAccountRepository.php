<?php

namespace App\Repositories;

use App\Models\ExpertAccount;

class FreelancerAccountRepository
{
    public ExpertAccount $model;

    /**
     * @param ExpertAccount $model
     */
    public function __construct(ExpertAccount $model)
    {
    }
}
