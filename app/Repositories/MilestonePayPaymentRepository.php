<?php

namespace App\Repositories;

use App\Models\MilestonePayPayment;

class MilestonePayPaymentRepository
{
    public MilestonePayPayment $model;

    /**
     * @param MilestonePayPayment $model
     */
    public function __construct(MilestonePayPayment $model)
    {
    }
}
