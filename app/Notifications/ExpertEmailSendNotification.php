<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ExpertEmailSendNotification extends Notification {
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public function __construct( $data ) {
        $this->title   = $data['title'];
        $this->message = $data['message'];
        $this->link    = $data['link'];
        $this->avatar  = $data['avatar'];
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via( object $notifiable ): array {
        return [ 'database' ];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail( object $notifiable ): MailMessage {
        return ( new MailMessage )
            ->line( $this->title )
            ->line( $this->message )
            ->action( 'See Message', $this->link )
            ->line( 'Thank you for using our application!' );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray( object $notifiable ): array {
        return [
            'title'   => $this->title,
            'message' => $this->message,
            'link'    => $this->link,
            'avatar'  => $this->avatar
        ];
    }
}
