<?php

namespace App\Repositories;

use App\Models\Subscriber;

class SubscriberRepository
{
    public Subscriber $model;

    /**
     * @param Subscriber $model
     */
    public function __construct(Subscriber $model)
    {
    }
}
