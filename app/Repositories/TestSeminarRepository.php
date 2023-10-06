<?php

namespace App\Repositories;

use App\Models\TestSeminar;

class TestSeminarRepository
{
    public TestSeminar $model;

    /**
     * @param TestSeminar $model
     */
    public function __construct(TestSeminar $model)
    {
    }
}
