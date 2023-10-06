<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SeminarInstructor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'seminar_id'];

    public function seminar()
    {
        return $this->belongsTo(Seminar::class);
    }
}
