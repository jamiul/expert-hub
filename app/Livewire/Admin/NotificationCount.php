<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class NotificationCount extends Component
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
        $unreadCount          = auth()->user()->unreadNotifications()->count();

        return view( 'livewire.admin.notification-count', compact( 'unread_notifications', 'unreadCount' ) );
    }
}
