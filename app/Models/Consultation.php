<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Consultation extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        // $this->addMediaCollection('image')
        // ->singleFile();
        $this->addMediaCollection('image')
            ->singleFile()
            ->registerMediaConversions(function (): void {
                $this->addMediaConversion('consultation_image')
                ->crop('crop-center',1900, 400);
            });
    }

    public function getImageAttribute()
    {
        return $this->getFirstMediaUrl('image');
    }

    public function skills()
    {
        return $this->belongsToMany(Expertise::class, 'consultation_skill')
            ->withPivot('active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }

    public function expertField()
    {
        return $this->belongsTo(Expertise::class, 'expertise_id');
    }

    public function slots()
    {
        return $this->hasMany(ConsultationSlot::class, 'consultation_id');
    }
}
