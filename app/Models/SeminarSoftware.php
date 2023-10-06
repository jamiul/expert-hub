<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeminarSoftware extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug'];
    protected $dates = ['deleted_at'];

    public function Seminar()
    {
        return $this->hasMany(Seminar::class);
    }
}
