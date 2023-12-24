<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class ProfileLanguage extends Pivot
{

    protected $guarded = [];

    protected $table = 'profile_language';

    public $incrementing = true;
}
