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

    public function aboutAparts()
    {
        return $this->hasMany(AboutApart::class, 'about_apart_id');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this
            ->addMediaConversion('header_image')
            ->nonQueued()
            ->crop('crop-center', 1920, 380);
            // ->width(CmnEnum::BANNER_WIDTH)
            // ->height(CmnEnum::BANNER_HEIGHT);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('header_image')
            ->singleFile();

        $this->addMediaCollection('mission_image')
            ->singleFile();

        $this->addMediaCollection('story_image')
            ->singleFile();
    }

    public function headerImage()
    {
        $mediaItems = $this->getMedia('header_image');
        if (count($mediaItems) > 0) {
            return $mediaItems[0]->getUrl('header_image');
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
            return $mediaItems[0]->getUrl();
        }
    }
}
