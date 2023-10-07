<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calender extends Model
{
    use SoftDeletes;

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
