<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class ExpertNotifications extends Component {
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $per_page = 2;

    public $amount = 2;

    public function markAsRead( $id ) {
        auth()->user()
            ->unreadNotifications
            ->when( $id, function ( $query ) use ( $id ) {
                return $query->where( 'id', $id );
            } )
            ->markAsRead();
    }

    public function deleteNotification($id) {
        auth()->user()->notifications()->where( 'id', $id )->delete();
    }

    public function loadMore() {
        $this->amount += 2;
    }

    public function render() {
        $unread_notifications = auth()->user()->unreadNotifications()->get();

        $read_notifications = auth()->user()->readNotifications()->take( $this->amount )->get();

        $read_total = auth()->user()->readNotifications()->count();

        return view( 'livewire.expert-notifications', compact( 'unread_notifications', 'read_notifications', 'read_total' ) );
    }
}
