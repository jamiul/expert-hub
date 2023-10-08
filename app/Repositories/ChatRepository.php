<?php

namespace App\Repositories;

use App\Models\Chat;

class ChatRepository
{
    public Chat $model;

    /**
     * @param Chat $model
     */
    public function __construct(Chat $model)
    {
    }
}
