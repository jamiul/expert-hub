<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Favourite extends Model
{
    protected $guarded = [];

    public function loveable(): MorphTo
    {
        return $this->morphTo();
    }
}
