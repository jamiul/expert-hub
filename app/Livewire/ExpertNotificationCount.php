<?php

namespace App\Livewire;

use Livewire\Component;

class ExpertNotificationCount extends Component
{
    public function render() {
        $unreadCount = auth()->user()->unreadNotifications()->count();

        return view('livewire.expert-notification-count', compact('unreadCount'));
    }
}
