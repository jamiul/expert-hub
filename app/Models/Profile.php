<?php

namespace App\Models;

use App\Enums\ProfileStatus;
use App\Enums\ProfileType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'status' => ProfileStatus::class,
        'type' => ProfileType::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class, 'profile_language')
            ->withPivot('proficiency','active')
            ->wherePivot('active', 1)
            ->withTimestamps();
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
