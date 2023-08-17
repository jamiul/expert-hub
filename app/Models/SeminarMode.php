<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeminarMode extends Model
{
    // protected $table = 'seminar_modes';
    use SoftDeletes;

    public function posts()
    {
        return $this->hasMany(Seminar::class);
    }
}
