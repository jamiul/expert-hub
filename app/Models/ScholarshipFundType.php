<?php

namespace App\Models;

use App\Enums\Scholarship\FundType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScholarshipFundType extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'name' => FundType::class,
    ];
}
