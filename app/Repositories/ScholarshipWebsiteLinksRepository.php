<?php

namespace App\Repositories;

use App\Models\ScholarshipWebsiteLink;

class ScholarshipWebsiteLinksRepository
{
    public ScholarshipWebsiteLink $model;

    /**
     * @param ScholarshipWebsiteLink $model
     */
    public function __construct(ScholarshipWebsiteLink $model)
    {
    }
}
