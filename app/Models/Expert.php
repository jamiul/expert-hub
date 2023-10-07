<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Expert extends Model
{
    protected $fillable = ['name', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Expertise::class, 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Expertise::class, 'parent_id', 'id');
    }
}
