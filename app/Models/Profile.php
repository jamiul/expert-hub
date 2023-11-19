<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'research_profiles' => 'array'
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
        return $this->hasMany(ProfileConsultation::class);
    }
}
