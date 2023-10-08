<?php

namespace App\Repositories;

use App\Models\BookmarkedClient;

class BookmarkedClientRepository
{
    public BookmarkedClient $model;

    /**
     * @param BookmarkedClient $model
     */
    public function __construct(BookmarkedClient $model)
    {
    }
}
