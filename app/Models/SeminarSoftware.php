<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeminarSoftware extends Model
{
 protected $table = 'seminar_software';
    use SoftDeletes;

    public function Seminar()
    {
        return $this->hasMany(Seminar::class);
    }
}
