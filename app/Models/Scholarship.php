<?php

namespace App\Models;

use App\Enums\Scholarship\StudentType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scholarship extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'deadline' => 'date',
        'student_type' => StudentType::class,
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function studyLevels()
    {
        return $this->hasMany(ScholarshipStudyLevel::class);
    }

    public function studyAreas()
    {
        return $this->belongsToMany(Expertise::class, 'scholarship_study_area')
            ->withPivot('active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }

    public function fundTypes()
    {
        return $this->hasMany(ScholarshipFundType::class);
    }
}
