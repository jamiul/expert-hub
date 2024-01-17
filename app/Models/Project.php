<?php

namespace App\Models;

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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments');
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

    public function eois()
    {
        return $this->hasMany(Eoi::class);
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

}
