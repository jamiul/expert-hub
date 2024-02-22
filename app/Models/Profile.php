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
    use Favoritable;

    protected $guarded = [];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('resume')
            ->singleFile();
        $this->addMediaCollection('picture')
            ->singleFile();
    }

    public function getResumeAttribute()
    {
        return $this->getFirstMediaUrl('resume');
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

    public function externalProfiles()
    {
        return $this->hasMany(ExternalProfile::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function conversations()
    {
        return $this->hasMany(Conversation::class, 'creator_profile_id');
    }

    public function participants()
    {
        return $this->hasMany(Participant::class, 'profile_id');
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

    public function trainings()
    {
        return $this->hasMany(Training::class, 'expert_id');
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
        return $query
            ->where('type', ProfileType::Client);
    }

    public function scopeExpert($query)
    {
        return $query
            ->where('type', ProfileType::Expert)
            ->where('status', ProfileStatus::Approved);
    }

    public function savedProjects()
    {
        $projectIds = Favourite::where('profile_id', $this->id)->where('loveable_type', Project::class)->pluck('loveable_id')->toArray();
        return Project::whereIn('id', $projectIds)->get();
    }

    public function savedExperts()
    {
        $expertIds = Favourite::where('profile_id', $this->id)->where('loveable_type', Profile::class)->pluck('loveable_id')->toArray();
        return Profile::whereIn('id', $expertIds)->get();
    }

    public function eois()
    {
        return $this->hasMany(Eoi::class, 'expert_id');
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class, 'expert_id');
    }

    public function offers()
    {
        return $this->hasMany(Offer::class, 'expert_id');
    }

    public function expertContracts()
    {
        return $this->hasMany(Contract::class, 'expert_id');
    }

    public function clientContracts()
    {
        return $this->hasMany(Contract::class, 'client_id');
    }
}
