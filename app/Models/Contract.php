<?php

namespace App\Models;

use App\Enums\ContractStatus;
use App\Enums\DisputeStatus;
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

    public function offer()
    {
        return $this->belongsTo(Offer::class);
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

    public function scopeActive($query)
    {
        $query->where('status', ContractStatus::Active);
    }

    public function scopeDisputed($query)
    {
        $query->where('status', ContractStatus::Disputed);
    }

    public function scopeHold($query)
    {
        $query->where('status', ContractStatus::Hold);
    }

    public function scopeCanceled($query)
    {
        $query->where('status', ContractStatus::Canceled);
    }

    public function scopeEnded($query)
    {
        $query->where('status', ContractStatus::Ended);
    }

    public function testimonial()
    {
        return Testimonial::where('contract_id', $this->id)->first();
    }

    public function disputes()
    {
        return $this->hasMany(Dispute::class);
    }

    public function currentDispute()
    {
        return $this->disputes->where('status', DisputeStatus::Open)->first();
    }
}
