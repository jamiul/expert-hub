<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScholarshipLevel extends Model
{
    use SoftDeletes;

    public function posts()
    {
        return $this->hasMany(Scholarship::class);
    }
}
