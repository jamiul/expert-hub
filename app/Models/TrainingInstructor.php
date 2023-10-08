<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingInstructor extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'training_id'];

    public function training()
    {
        return $this->belongsTo(Training::class);
    }
}
