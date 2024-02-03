<?php

namespace App\Notifications;

use App\Models\Offer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendOfferNotification extends Notification
{
    use Queueable;

    private Offer $offer;

    /**
     * Create a new notification instance.
     */
    public function __construct( Offer $offer )
    {
        $this->offer = $offer;
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
            ->line('You have received new offer' )
            ->line('You have received new offer from ' . $this->offer->client->user->full_name )
            ->action('View Offer', route('expert.offer.show', $this->offer) )
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
            'title'   => 'You have received new offer',
            'message' => 'You have received new offer from ' . $this->offer->client->user->full_name,
            'link'    => route('expert.offer.show', $this->offer),
            'button'    => 'View Offer',
            'avatar'  => $this->offer->client->picture,
        ];
    }
}
