<?php

namespace App\Repositories;

use App\Models\ChatThread;

class ChatThreadRepository
{
    public ChatThread $model;

    /**
     * @param ChatThread $model
     */
    public function __construct(ChatThread $model)
    {
    }
}
