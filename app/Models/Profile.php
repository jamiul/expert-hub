<?php

namespace App\Models;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Profile extends Model implements HasMedia
{
    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;

    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('picture')
            ->singleFile();
    }

    public function getPictureAttribute()
    {
        return $this->getFirstMediaUrl('picture');
    }

    protected $casts = [
        'status' => ProfileStatus::class,
        'type' => ProfileType::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function languages():BelongsToMany
    {
        return $this->belongsToMany(Language::class, 'profile_language')
            ->withPivot('proficiency','active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }

    public function expertField()
    {
        return $this->belongsTo(Expertise::class, 'expertise_id');
    }

    public function expertises()
    {
        return $this->belongsToMany(Expertise::class, 'profile_expertise')
            ->withPivot('active')
            ->wherePivot('active', 1)
            ->withTimestamps();
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function consultation()
    {
        return $this->hasMany(Consultation::class);
    }

    public function experiences()
    {
        return $this->hasMany(Experience::class);
    }

    public function portfolio()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function scopeClient($query)
    {
        return $query->where('type', ProfileType::Client);
    }

    public function scopeExpert($query)
    {
        return $query->where('type', ProfileType::Expert);
    }
}
