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
}
