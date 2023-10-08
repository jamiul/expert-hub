<?php

namespace App\Repositories;

use App\Models\ServicePackagePayment;

class ServicePackagePaymentRepository
{
    public ServicePackagePayment $model;

    /**
     * @param ServicePackagePayment $model
     */
    public function __construct(ServicePackagePayment $model)
    {
    }
}
