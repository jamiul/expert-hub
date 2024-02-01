<?php

namespace App\Models;

use App\Enums\ContractStatus;
use App\Enums\MilestoneStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'status' => ContractStatus::class,
    ];

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

    public function milestones()
    {
        return $this->hasMany(Milestone::class);
    }

    public function fundedMilestones()
    {
        return $this->hasMany(Milestone::class)->where('status', MilestoneStatus::Funded)->get();
    }
}
