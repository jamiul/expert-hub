<?php

namespace App\Repositories;

use App\Models\BookmarkedProject;

class BookmarkedProjectRepository
{
    public BookmarkedProject $model;

    /**
     * @param BookmarkedProject $model
     */
    public function __construct(BookmarkedProject $model)
    {
    }
}
