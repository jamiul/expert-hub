<?php

namespace App\Livewire;

use Livewire\Component;

class ExpertNotificationCount extends Component
{
    public function markAsRead( $id )
    {
        $notification = auth()->user()->notifications()->where( 'id', $id )->first();

        if ( $notification ) {
            $notification->markAsRead();

            return redirect( $notification->data['link'] );
        }
    }

    public function render()
    {
        $unread_notifications = auth()->user()->notifications()->limit(5)->get();
        $unreadCount          = auth()->user()->unreadNotifications()->count();
        if($unreadCount == 0){
            $unread_notifications = auth()->user()->notifications()->limit(5)->get();
        }

        return view( 'livewire.expert-notification-count', compact( 'unread_notifications', 'unreadCount' ) );
    }
}
