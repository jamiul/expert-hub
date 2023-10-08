<?php

namespace App\Repositories;

use App\Models\ExpertAccount;

class ExpertAccountRepository
{
    public ExpertAccount $model;

    /**
     * @param ExpertAccount $model
     */
    public function __construct(ExpertAccount $model)
    {
    }
}
