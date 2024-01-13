<?php

namespace App\Livewire;

use Livewire\Component;

class NewMessageCount extends Component
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
        $unread_notifications = auth()->user()->unreadNotifications()->get();
        
        // $unreadMessageCount          = auth()->user()->unreadNotifications()->count();
        $unreadMessageCount          = 3;

        return view( 'livewire.new-message-count', compact( 'unread_notifications', 'unreadMessageCount' ) );
    }
}
