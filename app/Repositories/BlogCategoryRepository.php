<?php

namespace App\Repositories;

use App\Models\BlogCategory;

class BlogCategoryRepository
{
    public BlogCategory $model;

    /**
     * @param BlogCategory $model
     */
    public function __construct(BlogCategory $model)
    {
    }
}
