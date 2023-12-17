<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Scholarship extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'deadline' => 'date',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function country()
    {
        return $this->belongsTo(University::class);
    }

    public function eligibilities()
    {
        return $this->hasMany(ScholarshipEligibility::class);
    }

    public function areas()
    {
        return $this->belongsToMany(Expertise::class, 'scholarship_area')
            ->withPivot('active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }

    public function funds()
    {
        return $this->hasMany(ScholarshipFund::class);
    }
}
