<?php

namespace App\Repositories;

use App\Models\Document;

class DocumentRepository
{
    public Document $model;

    /**
     * @param Document $model
     */
    public function __construct(Document $model)
    {
    }
}
