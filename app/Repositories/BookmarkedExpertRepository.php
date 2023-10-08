<?php

namespace App\Repositories;

use App\Models\BookmarkedExpert;

class BookmarkedExpertRepository
{
    public BookmarkedExpert $model;

    /**
     * @param BookmarkedExpert $model
     */
    public function __construct(BookmarkedExpert $model)
    {
    }
}
