<?php

namespace App\Models;

use App\Enums\ProfileType;
use App\Notifications\EmailVerificationNotification;
use App\Notifications\VerifyEmailQueued;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory;
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
        return $this->hasOne(Profile::class)->where('profiles.type', $this->active_profile);
    }

    public function expert_kyc()
    {
        return $this->hasOne(ExpertKYC::class);
    }

    public function expert_withdrawal()
    {
        return $this->hasMany(ExpertWithdrawal::class);
    }

    public function withdraw_schedule()
    {
        return $this->hasOne(WithdrawSchedule::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function getFullNameAttribute()
    {
        return $this->title . ' ' . $this->first_name . ' ' . $this->last_name;
    }

    public function isClient()
    {
        return $this->active_profile === ProfileType::Client;
    }

    public function isExpert()
    {
        return $this->active_profile === ProfileType::Expert;
    }

    public function client_transaction()
    {
        return $this->hasMany(ClientTransaction::class, 'client_id');
    }

    /**
     * Send the queued email verification notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        $this->notify(new VerifyEmailQueued);
    }
}
