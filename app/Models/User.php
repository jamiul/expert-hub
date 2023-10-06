<?php

namespace App\Models;

use App\Notifications\EmailVerificationNotification;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;
    use HasRoles;

    protected $fillable = [
        'name',
        'email',
        'password',
        'user_name',
        'confirmation_code'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification()
    {
        try {
            $this->notify(new EmailVerificationNotification());
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function address()
    {
        return $this->morphOne(Address::class, 'addressable');
    }

    public function userPackage()
    {
        return $this->hasOne(UserPackage::class);
    }

    public function profile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function badges()
    {
        return $this->hasMany(UserBadge::class);
    }

    public function verifications()
    {
        return $this->hasMany(Verification::class);
    }

    public function workExperiences()
    {
        return $this->hasMany(WorkExperience::class);
    }

    public function userRoles()
    {
        return $this->hasMany(UserRole::class);
    }

    public function userPortfolios()
    {
        return $this->hasMany(Portfolio::class);
    }

    public function userVerifications()
    {
        return $this->hasMany(Verification::class);
    }

    public function bids()
    {
        return $this->hasMany(ProjectBid::class, 'bid_by_user_id');
    }

    public function projectUsers()
    {
        return $this->hasMany(ProjectUser::class);
    }

    public function number_of_projects()
    {
        return $this->hasMany(Project::class, 'client_user_id');
    }

    public function education_details()
    {
        return $this->hasMany(EducationDetail::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'reviewed_user_id')->where('published', 1);
    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function purchasedServices()
    {
        return $this->hasMany(ServicePackagePayment::class);
    }
}
