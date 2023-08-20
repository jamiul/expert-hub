<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SeminarMode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug'];
    protected $dates = ['deleted_at'];

    public function posts()
    {
        return $this->hasMany(Seminar::class);
    }
}
