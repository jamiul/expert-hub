<?php

namespace App\Repositories;

use App\Models\HireInvitation;

class HireInvitationRepository
{
    public HireInvitation $model;

    /**
     * @param HireInvitation $model
     */
    public function __construct(HireInvitation $model)
    {
    }
}
