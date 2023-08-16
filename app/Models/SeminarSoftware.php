<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeminarSoftware extends Model
{
    use SoftDeletes;

    public function Seminar()
    {
        return $this->hasMany(Seminar::class);
    }
}
