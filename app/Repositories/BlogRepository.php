<?php

namespace App\Repositories;

use App\Models\Blog;

class BlogRepository
{
    public Blog $model;

    /**
     * @param Blog $model
     */
    public function __construct(Blog $model)
    {
    }
}
