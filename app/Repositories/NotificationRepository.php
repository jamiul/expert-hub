<?php

namespace App\Repositories;

use App\Models\Notification;

class NotificationRepository
{
    public Notification $model;

    /**
     * @param Notification $model
     */
    public function __construct(Notification $model)
    {
    }
}
