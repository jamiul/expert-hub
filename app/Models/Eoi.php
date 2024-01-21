<?php

namespace App\Models;

use App\Enums\EoiStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Eoi extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];

    protected $casts = [
        'status' => EoiStatus::class,
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments');
    }

    public function expert()
    {
        return $this->belongsTo(Profile::class);
    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function markAsShortListed()
    {
        $this->update(['is_shortlisted' => true]);
    }

    public function scopeShortListed($query)
    {
        return $query->where('is_shortlisted', true);
    }

    public function markAsArchived()
    {
        $this->update(['is_archived' => true]);
    }

    public function markAsUnArchived()
    {
        $this->update(['is_archived' => false]);
    }

    public function scopeArchived($query)
    {
        return $query->where('is_archived', true);
    }

    public function scopeMessaged($query)
    {
        return $query->where('is_messaged', true);
    }
}
