<?php

namespace App\Repositories;

use App\Models\Translation;

class TranslationRepository
{
    public Translation $model;

    /**
     * @param Translation $model
     */
    public function __construct(Translation $model)
    {
    }
}
