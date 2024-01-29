<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function expert()
    {
        return $this->belongsTo(Profile::class, 'expert_id');
    }

    public function client()
    {
        return $this->belongsTo(Profile::class, 'client_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
