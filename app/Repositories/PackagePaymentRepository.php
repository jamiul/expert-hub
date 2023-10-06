<?php

namespace App\Repositories;

use App\Models\PackagePayment;

class PackagePaymentRepository
{
    public PackagePayment $model;

    /**
     * @param PackagePayment $model
     */
    public function __construct(PackagePayment $model)
    {
    }
}
