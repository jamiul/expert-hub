<?php

namespace App\Notifications;

use App\Models\Project;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProjectInvitationNotification extends Notification
{
    use Queueable;

    private Project $project;

    /**
     * Create a new notification instance.
     */
    public function __construct(Project $project )
    {
        $this->project = $project;
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
            'title'   => 'Invitation to submit EOI',
            'message' => 'Submit EOI to this project',
            'link'    => route('eoi.create', $this->project),
            'button'  => 'View invitation',
            'avatar'  => $this->project->client->picture ?: asset('dummy-user.png'),
        ];
    }
}
