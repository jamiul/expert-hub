<li>
    <a class="icon-btn border"  @click.prevent="openDropdown = (openDropdown === 'notification') ? null : 'notification'" href="#">
        <span class="{{$unreadCount > 0 ? '' : 'd-none'}}" wire:poll.keep-alive>{{ $unreadCount }}</span>
        <x-icon.bell/>
    </a>
    <div class="header-dropdown" wire:ignore.self x-cloak x-show="openDropdown === 'notification'">
        <div class="notification-dropdown-inner">
            <div class="notification-dropdown-item-wrapper">
                @forelse($unread_notifications as $unread_notification)
                    <div class="notification-dropdown-item {{ ($unread_notification->unread()) ? 'notification-dropdown-item-unread' : '' }}" wire:click="markAsRead('{{ $unread_notification->id }}')">
                        <div class="notification-dropdown-thumb">
                            <img
                                src="{{ $unread_notification->data['avatar']  }}"
                                class="" alt="avatar">
                        </div>
                        <div class="notification-dropdown-info">
                            <p class="text-sm fw-medium notification-dropdown-title">{{ @$unread_notification->data['title'] }}</p>
                            <p class="text-sm notification-dropdown-body">
                                <span class="notification-dropdown-message">{{ Str::limit($unread_notification->data['message'], $limit = 150, $end = '...') }}</span>
                                <span class="notification-dropdown-time">{{ $unread_notification->created_at->diffForHumans() }}</span>
                            </p>
                        </div>
                    </div>
                @empty

                @endforelse
            </div>
            <a href="{{ route('notifications') }}" class="notification-dropdown-view-all">
                <x-icon.bell fill="#C8C5D4"/>
                View All Notification</a>
        </div>
    </div>
</li>
