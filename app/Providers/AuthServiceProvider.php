<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\HtmlString;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->greeting('Verify your email address to complete registration')
                ->subject('Verify your email address to complete registration')
                ->line(new HtmlString("<br> Hi " . $notifiable->first_name . "<br><br> Thanks for your interest in joining EduExHub! To complete your registration, we need you to verify your email address."))
                ->action('Verify Email', $url)
                ->salutation(new HtmlString("Thanks for your time, <br> The EduExHub Team"));
        });
        $this->registerPolicies();

        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(
            function ($user, $ability) {
                return $user->hasRole('admin') ? true : null;
            }
        );
    }
}
