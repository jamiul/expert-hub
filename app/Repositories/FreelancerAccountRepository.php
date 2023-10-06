<?php

namespace App\Repositories;

use App\Models\FreelancerAccount;

class FreelancerAccountRepository
{
    public FreelancerAccount $model;

    /**
     * @param FreelancerAccount $model
     */
    public function __construct(FreelancerAccount $model)
    {
    }
}
