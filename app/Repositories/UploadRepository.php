<?php

namespace App\Repositories;

use App\Models\Upload;

class UploadRepository
{
    public Upload $model;

    /**
     * @param Upload $model
     */
    public function __construct(Upload $model)
    {
    }
}
