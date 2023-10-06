<?php

namespace App\Repositories;

use App\Models\BookmarkedScholarship;

class BookmarkedScholarshipRepository
{
    public BookmarkedScholarship $model;

    /**
     * @param BookmarkedScholarship $model
     */
    public function __construct(BookmarkedScholarship $model)
    {
    }
}
