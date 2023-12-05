<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Consultation extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function skills()
    {
        return $this->belongsToMany(Expertise::class, 'consultation_skill')
            ->withPivot('active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }
}
