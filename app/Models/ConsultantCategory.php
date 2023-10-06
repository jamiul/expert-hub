<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsultantCategory extends Model
{
    use SoftDeletes;

    public function services()
    {
        return $this->hasMany(Service::class, 'project_cat_id');
    }
}
