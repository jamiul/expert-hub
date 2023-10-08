<?php

namespace App\Repositories;

use App\Models\MilestonePayment;

class MilestonePaymentRepository
{
    public MilestonePayment $model;

    /**
     * @param MilestonePayment $model
     */
    public function __construct(MilestonePayment $model)
    {
    }
}
