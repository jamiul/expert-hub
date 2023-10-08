<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScholarshipCategory extends Model
{
    use SoftDeletes;

    public function posts()
    {
        return $this->hasMany(Scholarship::class);
    }
}
