<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
    protected $fillable = [ 'parent_id','name'];

    public function parent()
    {
        return $this->belongsTo(Skill::class, 'parent_id');
    }

    public function childrens()
    {
        return $this->hasMany(Skill::class, 'parent_id', 'id');
    }
}
