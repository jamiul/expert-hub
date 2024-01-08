<?php

namespace App\Livewire;

use Livewire\Component;

class ExpertNotificationCount extends Component {
    public function markAsRead( $id ) {
        auth()->user()
            ->unreadNotifications
            ->when( $id, function ( $query ) use ( $id ) {
                return $query->where( 'id', $id );
            } )
            ->markAsRead();
    }

    public function render() {
        $unread_notifications = auth()->user()->unreadNotifications()->get();
        $unreadCount          = auth()->user()->unreadNotifications()->count();

        return view( 'livewire.expert-notification-count', compact( 'unread_notifications', 'unreadCount' ) );
    }
}
