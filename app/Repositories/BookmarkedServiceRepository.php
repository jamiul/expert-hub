<?php

namespace App\Repositories;

use App\Models\BookmarkedService;

class BookmarkedServiceRepository
{
    public BookmarkedService $model;

    /**
     * @param BookmarkedService $model
     */
    public function __construct(BookmarkedService $model)
    {
    }
}
