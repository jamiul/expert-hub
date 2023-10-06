<?php

namespace App\Repositories;

use App\Models\BookmarkedFreelancer;

class BookmarkedFreelancerRepository
{
    public BookmarkedFreelancer $model;

    /**
     * @param BookmarkedFreelancer $model
     */
    public function __construct(BookmarkedFreelancer $model)
    {
    }
}
