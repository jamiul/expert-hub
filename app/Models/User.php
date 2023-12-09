<?php

namespace App\Models;

use App\Enums\ProfileType;
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

    protected $guarded = [];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
        'active_profile' => ProfileType::class,
    ];

    public function profile()
    {
        return $this->hasOne(Profile::class)->where('profiles.type', 'users.active_profile');
    }

    public function scopeClient($query)
    {
        return $query->where('type', ProfileType::Client);
    }

}
