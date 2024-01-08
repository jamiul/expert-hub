<div class="title-page-body" wire:poll.keep-alive>
    <div class="notification-page-block-heading">
        <h3 class="">Most recent</h3>
    </div>
    <div class="notification-details-list">
        @forelse($unread_notifications as $unread_notification)
            <div class="notification-details-list-item">
                <div class="notification-details-thumb">
                    <img
                        src="{{ $unread_notification->data['avatar']  }}"
                        class="" alt="avatar">
                </div>
                <div class="notification-details-info">
                    <p class="text-sm notification-details-time">
                        <x-icon.calender/>
                        {{ $unread_notification->created_at->format('M d, Y') }}
                    </p>
                    <p class="fw-medium notification-details-title">{{ @$unread_notification->data['title'] }}</p>
                    <p class=" notification-details-message">{{ Str::limit($unread_notification->data['message'], $limit = 150, $end = '...') }}</p>

                </div>
                <div class="notification-details-action">
                    @if($unread_notification->data['link'])
                        <a class="btn btn-outline-primary" href="{{ @$unread_notification->data['link'] }}">{{ @$unread_notification->data['button'] }}</a>
                    @endif
                    <button class="icon-btn" wire:click="deleteNotification('{{ $unread_notification->id }}')">
                        <x-icon.close/>
                    </button>
                </div>
            </div>
        @empty
            <div class="no-details-notification">
                <img src="{{ asset('/assets/frontend/img/notification-bell-lg.png') }}"
                     class="" alt="">
                <p class="h6 fw-medium mt-3">No New Notification</p>
            </div>
        @endforelse
    </div>
    @if($read_notifications->count() > 0)
        <div class="notification-page-block-heading">
            <h3 class="">Earlier</h3>
        </div>
        <div class="notification-details-list">
            @forelse($read_notifications as $read_notification)
                <div class="notification-details-list-item">
                    <div class="notification-details-thumb">
                        <img
                            src="{{ $read_notification->data['avatar']  }}"
                            class="" alt="avatar">
                    </div>
                    <div class="notification-details-info">
                        <p class="text-sm notification-details-time">
                            <x-icon.calender/>
                            {{ $read_notification->created_at->format('M d, Y') }}
                        </p>
                        <p class="fw-medium notification-details-title">{{ @$read_notification->data['title'] }}</p>
                        <p class=" notification-details-message">{{ Str::limit($read_notification->data['message'], $limit = 150, $end = '...') }}</p>

                    </div>
                    <div class="notification-details-action">
                        @if($read_notification->data['link'])
                            <a class="btn btn-outline-primary" href="{{ @$read_notification->data['link'] }}">{{ @$read_notification->data['button'] }}</a>
                        @endif
                        <button class="icon-btn" wire:click="deleteNotification('{{ $read_notification->id }}')">
                            <x-icon.close/>
                        </button>
                    </div>
                </div>
            @empty

            @endforelse
        </div>

        @if($read_total > $per_page)
            <div class="load-more-notification-item text-center">
                <button class="btn btn-outline-primary" wire:click="loadMore">Load More</button>
            </div>
        @endif
    @endif
</div>
