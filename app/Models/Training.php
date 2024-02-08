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

    public function expert()
    {
        return $this->belongsTo(Profile::class, 'expert_id');
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
        return $this->belongsToMany(Profile::class, 'training_instructors', 'training_id', 'expert_id');
    }

    public function partners()
    {
        return $this->belongsToMany(University::class, 'training_partners', 'training_id', 'partner_id');
    }
}
