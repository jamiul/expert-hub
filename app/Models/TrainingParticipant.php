<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingParticipant extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function training() {
        return $this->belongsTo(Training::class);
    }
}
