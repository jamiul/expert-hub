<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class ExpertKYC extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;

    protected $table = 'expert_kyc';

    protected $guarded = [];

    protected $casts = [
        'future_requirements' => 'array',
        'requirements' => 'array',
        'verification' => 'array'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('document_front')
             ->singleFile();
        $this->addMediaCollection('document_back')
             ->singleFile();
        $this->addMediaCollection('additional_document_front')
             ->singleFile();
        $this->addMediaCollection('additional_document_back')
             ->singleFile();
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

}
