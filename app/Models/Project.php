<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'skills' => 'array',
        'attachments' => 'array',
    ];

    public function projectCategory()
    {
        return $this->belongsTo(ProjectCategory::class);
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_user_id');
    }

    public function cancelByUser()
    {
        return $this->belongsTo(User::class, 'cancel_by_user_id');
    }

    public function documents()
    {
        return $this->morphMany(Document::class, 'documentable');
    }

    public function milestones()
    {
        return $this->hasMany(ProjectMilestone::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function projectBids()
    {
        return $this->hasMany(ProjectBid::class);
    }

    public function projectUser()
    {
        return $this->hasOne(ProjectUser::class);
    }

    public function cancelProject()
    {
        return $this->hasOne(CancelProject::class);
    }

    public function hireInvitation()
    {
        return $this->hasOne(HireInvitation::class);
    }

    public function scopeBiddable($query)
    {
        return $query->where('biddable', 1);
    }

    public function scopeBiddisable($query)
    {
        return $query->where('biddable', 0);
    }

    public function scopeClosed($query)
    {
        return $query->where('closed', 1);
    }

    public function scopeOpen($query)
    {
        return $query->where('closed', 0);
    }

    public function scopeNotcancel($query)
    {
        return $query->where('cancel_status', 0);
    }

    public function scopeHourly($query)
    {
        return $query->where('type', 'hourly');
    }

    public function scopeFixedBudget($query)
    {
        return $query->where('type', 'fixed');
    }

    public function scopeLongTerm($query)
    {
        return $query->where('type', 'long_term');
    }
}
