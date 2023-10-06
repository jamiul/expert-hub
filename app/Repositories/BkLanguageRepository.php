<?php

namespace App\Repositories;

use App\Models\BkLanguage;

class BkLanguageRepository
{
    public BkLanguage $model;

    /**
     * @param BkLanguage $model
     */
    public function __construct(BkLanguage $model)
    {
    }
}
