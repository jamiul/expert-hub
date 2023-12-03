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
        return $this->hasMany(ConsultationSkill::class);
    }
}
