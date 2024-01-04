<?php

namespace App\Livewire;

use Livewire\Component;

class ExpertNotificationCount extends Component
{
    public $count;

    protected $listeners = [
        'NotificationMarkedAsRead' => 'updateCount',
    ];

    public function updateCount(int $count): int
    {
        return $count;
    }
}
