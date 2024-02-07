<?php

namespace App\Notifications;

use App\Models\Contract;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use League\Glide\Manipulators\Contrast;

class AdminContractDisputeNotification extends Notification
{
    use Queueable;

    private Contract $contract;

    /**
     * Create a new notification instance.
     */
    public function __construct( Contract $contract )
    {
        $this->contract   = $contract;
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
        return ( new MailMessage );
            // ->line( $this->title )
            // ->line( $this->message )
            // ->action( 'See Message', $this->link )
            // ->line( 'Thank you for using our application!' );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray( object $notifiable ): array
    {
        return [
            'title'   => 'A Contract has been disputed',
            'message' => $this->contract->project->title,
            'link'    => '#',
            'avatar'  => $this->contract->client->picture
        ];
    }
}
