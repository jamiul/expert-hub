<?php

namespace App\Models;

use App\Enums\ProfileStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    protected $casts = [
        'status' => ProfileStatus::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function languages()
    {
        return $this->hasMany(ProfileLanguage::class);
    }

    public function expertises()
    {
        return $this->hasMany(ProfileExpertise::class);
    }

    public function educationQualifications()
    {
        return $this->hasMany(ProfileEducation::class);
    }

    public function consultationServices()
    {
        return $this->hasMany(Consultation::class);
    }
}
