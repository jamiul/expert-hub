<?php

namespace App\Models;

use App\Enums\MilestoneStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Milestone extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'status' => MilestoneStatus::class,
    ];

    public function eoi() {
        return $this->belongsTo(Eoi::class);
    }
}
