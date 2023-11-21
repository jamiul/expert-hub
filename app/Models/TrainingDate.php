<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingDate extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'training_id',
        'date_start',
        'training_date',
        'date_end',
        'descriptions'
    ];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
