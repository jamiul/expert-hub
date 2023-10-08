<?php

namespace App\Repositories;

use App\Models\Review;

class ReviewRepository
{
    public Review $model;

    /**
     * @param Review $model
     */
    public function __construct(Review $model)
    {
    }
}
