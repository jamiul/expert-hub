<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingSoftware extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug'];
    protected $dates = ['deleted_at'];

    public function trainings()
    {
        return $this->hasMany(Training::class);
    }
}
