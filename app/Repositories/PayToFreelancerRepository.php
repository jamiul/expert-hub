<?php

namespace App\Repositories;

use App\Models\PayToFreelancer;

class PayToFreelancerRepository
{
    public PayToFreelancer $model;

    /**
     * @param PayToFreelancer $model
     */
    public function __construct(PayToFreelancer $model)
    {
    }
}
