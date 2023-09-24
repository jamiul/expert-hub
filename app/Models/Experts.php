<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experts extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Experts::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Experts::class, 'parent_id');
    }
}
