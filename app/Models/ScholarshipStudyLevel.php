<?php

namespace App\Models;

use App\Enums\Scholarship\StudyLevel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScholarshipStudyLevel extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'name' => StudyLevel::class,
    ];
    
}
