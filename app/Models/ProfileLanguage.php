<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfileLanguage extends Pivot
{
    use SoftDeletes;

    protected $guarded = [];

    protected $table = 'profile_language';

    public $incrementing = true;
}
