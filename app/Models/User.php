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
        'title',
        'first_name',
        'last_name',
        'email',
        'password',
        'user_type',
        'country_id',
        'newsletter',
        'terms',
        'user_name',
        'confirmation_code'
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userProfile()
    {
        return $this->hasOne(Profile::class);
    }
}
