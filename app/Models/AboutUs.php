<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class AboutUs extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('header_image')
            ->singleFile();

        $this->addMediaCollection('mission_image')
            ->singleFile();
    }   

    public function headerImage()
    {
        $mediaItems = $this->getMedia('header_image');
        return $mediaItems[0]->getUrl();
    }
}
