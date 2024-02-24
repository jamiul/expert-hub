<?php

namespace App\Observers;

use App\Enums\ProfileStatus;
use App\Helpers\PaymentHelper;
use App\Models\Profile;
use Log;

class ProfileStatusObserver
{
    /**
     * Handle the Profile "created" event.
     */
    public function created(Profile $profile): void
    {
        //
    }

    /**
     * Handle the Profile "updated" event.
     */
    public function updated(Profile $profile): void
    {
        if($profile->stripe_acct_id == '' && $profile->status == ProfileStatus::Approved->name){
            PaymentHelper::expertRegisterToStripe($profile->user);
        }
    }

    /**
     * Handle the Profile "deleted" event.
     */
    public function deleted(Profile $profile): void
    {
        //
    }

    /**
     * Handle the Profile "restored" event.
     */
    public function restored(Profile $profile): void
    {
        //
    }

    /**
     * Handle the Profile "force deleted" event.
     */
    public function forceDeleted(Profile $profile): void
    {
        //
    }
}
