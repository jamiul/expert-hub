<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScholarshipFundType extends Model
{
    use SoftDeletes;

    protected $guarded = [];
}
