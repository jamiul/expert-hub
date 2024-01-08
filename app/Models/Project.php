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

    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('attachments');
    }
    
    public function skills()
    {
        return $this->belongsToMany(Expertise::class, 'project_skill')
            ->withPivot('active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }

}
