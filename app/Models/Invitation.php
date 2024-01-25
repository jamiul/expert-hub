<?php

namespace App\Models;

use App\Enums\InvitationStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invitation extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'status' => InvitationStatus::class,
    ];

    public function expert()
    {
        return $this->belongsTo(Profile::class, 'expert_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'expert_id');
    }
}
