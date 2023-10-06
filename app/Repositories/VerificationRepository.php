<?php

namespace App\Repositories;

use App\Models\Verification;

class VerificationRepository
{
    public Verification $model;

    /**
     * @param Verification $model
     */
    public function __construct(Verification $model)
    {
    }
}
