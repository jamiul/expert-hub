<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeminarDate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'seminar_id',
        'seminar_date',
        'descriptions'
    ];

    public function seminar()
    {
        return $this->belongsTo(Seminar::class);
    }
}
