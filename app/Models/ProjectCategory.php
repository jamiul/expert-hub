<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectCategory extends Model
{
    use SoftDeletes;

    public function children()
    {
        return $this->hasMany(ProjectCategory::class, 'parent_id', 'id');
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'project_category_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'project_cat_id');
    }

    public function scopeIsParent($query)
    {
        return $query->where('parent_id', 0);
    }
}
