<?php

namespace App\Repositories;

use App\Models\PayToExpert;

class PayToFreelancerRepository
{
    public PayToExpert $model;

    /**
     * @param PayToExpert $model
     */
    public function __construct(PayToExpert $model)
    {
    }
}
