<?php

namespace App\Notifications;

use App\Models\Contract;
use App\Models\Offer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ContractEndedNotification extends Notification
{
    use Queueable;

    private Contract $contract;

    /**
     * Create a new notification instance.
     */
    public function __construct( Contract $contract )
    {
        $this->contract = $contract;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via( object $notifiable ): array
    {
        return [ 'database' ];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail( object $notifiable ): MailMessage
    {
        return ( new MailMessage )
            ->line('Contract Ended' )
            ->line('Your contract ended by ' . $this->contract->client->user->full_name )
            ->action('View Contract', route('expert.contracts') )
            ->line( 'Thank you for using our application!' );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray( object $notifiable ): array
    {
        return [
            'title'   => 'Contract Ended',
            'message' => 'Your contract ended by ' . $this->contract->client->user->full_name,
            'link'    => route('expert.contracts'),
            'button'    => 'View Contract',
            'avatar'  => $this->contract->client->picture,
        ];
    }
}
