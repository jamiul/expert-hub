<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Notifications extends Component {
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function markAsRead( $id ) {
        auth()->user()
            ->unreadNotifications
            ->when( $id, function ( $query ) use ( $id ) {
                return $query->where( 'id', $id );
            } )
            ->markAsRead();
    }

    public function render() {
        $notifications = auth()->user()->notifications()->paginate( 5 );

        return view( 'livewire.admin.notifications', compact( 'notifications' ) );
    }
}
