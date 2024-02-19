<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ExternalProfile extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
