<?php

namespace App\Livewire;

use App\Models\MessageRecipient;
use Auth;
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
        
        $unreadMessageCount          = MessageRecipient::whereNull('seen_at')->where('recipient_profile_id', '=', auth()->user()->profile->id)->count();
        // $unreadMessageCount          = 3;

        return view( 'livewire.new-message-count', compact( 'unread_notifications', 'unreadMessageCount' ) );
    }
}
