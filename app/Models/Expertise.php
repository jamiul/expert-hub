<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expertise extends Model
{
    use SoftDeletes;
    
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Expertise::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Expertise::class, 'parent_id', 'id');
    }

    public function scopeExpertise($query)
    {
        return $query->where('is_skill', false);
    }

    public function scopeSkill($query)
    {
        return $query->where('is_skill', true);
    }

    public function scopeIsChild($query)
    {
        return $query->whereNotNull('parent_id');
    }

    public function scopeIsParent($query)
    {
        return $query->where('parent_id', null);
    }
}
