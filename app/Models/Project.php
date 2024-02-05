<?php

namespace App\Models;

use App\Enums\InvitationStatus;
use App\Enums\OfferStatus;
use App\Enums\ProjectStatus;
use App\Enums\ProjectType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Project extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use Favoritable;

    protected $guarded = [];

    protected $casts = [
        'type' => ProjectType::class,
        'status' => ProjectStatus::class,
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments');
    }

    public function getAttachmentsAttribute()
    {
        return $this->getMedia('attachments');
    }

    public function isHourly()
    {
        return $this->type == ProjectType::Hourly;
    }

    public function isFixed()
    {
        return $this->type == ProjectType::Fixed;
    }

    public function isDraft()
    {
        return $this->status == ProjectStatus::Draft;
    }

    public function isPublished()
    {
        return $this->status == ProjectStatus::Published;
    }

    public function client()
    {
        return $this->belongsTo(Profile::class, 'profile_id');
    }

    public function expertise()
    {
        return $this->belongsTo(Expertise::class);
    }

    public function skills()
    {
        return $this->belongsToMany(Expertise::class, 'project_skill')
            ->withPivot('active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }

    public function scopePublished($query)
    {
        return $query->where('status', ProjectStatus::Published);
    }

    public function eois()
    {
        return $this->hasMany(Eoi::class);
    }

    public function newEois()
    {
        return $this->eois()->whereDate('created_at', now())->get();
    }

    public function messagedEois()
    {
        return $this->eois()->where('is_messaged', true)->get();
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }

    public function activeInvitations()
    {
        return $this->hasMany(Invitation::class)->where('status', InvitationStatus::Pending);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function activeOffers()
    {
        return $this->offers()->where('status', OfferStatus::Pending);
    }

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

}
