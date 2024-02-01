<?php

namespace App\Models;

use App\Enums\MilestoneStatus;
use App\Enums\OfferStatus;
use App\Enums\ProjectType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Offer extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'contract_type' => ProjectType::class,
        'status' => OfferStatus::class,
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

    public function isHourly()
    {
        return $this->contract_type == ProjectType::Hourly;
    }

    public function isFixed()
    {
        return $this->contract_type == ProjectType::Fixed;
    }

    public function fundedMilestones()
    {
        return $this->hasMany(Milestone::class)->where('status', MilestoneStatus::Funded)->get();
    }
}
