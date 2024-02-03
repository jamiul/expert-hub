<?php

namespace App\Models;

use App\Enums\TrainingMode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Training extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'mode' => TrainingMode::class,
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function category()
    {
        return $this->belongsTo(Expertise::class, 'expertise_id');
    }

    public function instructors()
    {
        return $this->hasMany(TrainingInstructor::class);
    }

    public function partners()
    {
        return $this->hasMany(TrainingPartner::class);
    }
}
