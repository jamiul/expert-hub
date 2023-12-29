<?php

namespace App\Models;

use App\Enums\CmnEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class AboutUs extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];
    protected $casts = [
        'instructor_list' => 'array',
        'team_list' => 'array',
    ];

    public function about_aparts()
    {
        return $this->hasMany(AboutApart::class, 'about_apart_id');
    }

    // public function registerMediaConversions(Media $media = null): void
    // {
    //     $this
    //         ->addMediaConversion('header_image')
    //         ->nonQueued()
    //         ->crop('crop-center', 1920, 380);

    //     $this
    //         ->addMediaConversion('mission_image')
    //         ->nonQueued()
    //         ->width(540)
    //         ->height(600);
    // }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('header_image')
            ->singleFile()
            ->registerMediaConversions(function (Media $media = null): void {
                $this->addMediaConversion('header_image_front')
                ->crop('crop-center',1900, 400);
            });

        $this->addMediaCollection('mission_image')
            ->singleFile()
            ->registerMediaConversions(function (Media $media = null): void {
                $this->addMediaConversion('mission_image_front')
                ->width(800)
                ->height(800);
            });

        $this->addMediaCollection('story_image')
            ->singleFile()
            ->registerMediaConversions(function (Media $media = null): void {
                $this->addMediaConversion('story_image_front')
                ->width(500)
                ->height(500);
            });
    }

    public function headerImage()
    {
        $mediaItems = $this->getMedia('header_image');
        if (count($mediaItems) > 0) {
            return $mediaItems[0]->getUrl('header_image_front');
        }
    }

    public function storyImage()
    {
        $mediaItems = $this->getMedia('story_image');
        if (count($mediaItems) > 0) {
            return $mediaItems[0]->getUrl();
        }
    }

    public function missionImage()
    {
        $mediaItems = $this->getMedia('mission_image');
        if (count($mediaItems) > 0) {
            return $mediaItems[0]->getUrl('mission_image_front');
        }
    }
}
