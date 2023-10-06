<?php

namespace App\Repositories;

use App\Models\Language;

class LanguageRepository
{
    public Language $model;

    /**
     * @param Language $model
     */
    public function __construct(Language $model)
    {
    }
}
