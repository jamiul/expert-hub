<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Service;

class ProjectCategory extends Model
{
    use SoftDeletes;
    public function projects()
    {
        return $this->hasMany(Project::class, 'project_category_id');
    }

    public function services()
    {
        return $this->hasMany(Service::class, 'project_cat_id');
    }
}
