<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;

class AboutApart extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];

    public function about_us()
    {
        return $this->belongsTo(AboutUs::class, 'about_us_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('icon')
            ->singleFile();
    }

    public function iconImage()
    {
        $mediaItems = $this->getMedia('icon');
        if (count($mediaItems) > 0) {
            return $mediaItems[0]->getUrl();
        }
    }
}
