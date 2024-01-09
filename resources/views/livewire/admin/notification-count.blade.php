<li class="dropdown notification-dropdown-menu">
    <a class="" href="#" role="button" id="notification-dropdown" data-bs-toggle="dropdown"
       aria-expanded="true">
        <span class="{{$unreadCount > 0 ? 'block' : 'hidden'}}" wire:poll.keep-alive>{{ $unreadCount }}</span>
        <x-icon.bell/>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink"
         onclick="stopPropagation(event)" wire:ignore.self>
        <div class="notification-dropdown-inner">
            @forelse($unread_notifications as $unread_notification)
                <div class="notification-dropdown-item notification-dropdown-item-unread" wire:click="markAsRead('{{ $unread_notification->id }}')">
                    <div class="notification-dropdown-thumb">
                        <img src="{{ $unread_notification->data['avatar']  }}"
                             class="" alt="avatar">
                    </div>
                    <div class="notification-dropdown-info">
                        <p class="text-sm fw-medium notification-dropdown-title">{{ @$unread_notification->data['title'] }}</p>
                        <p class="text-sm">
                            <span class="notification-dropdown-message">{{ Str::limit($unread_notification->data['message'], $limit = 150, $end = '...') }}</span>
                            <span class="notification-dropdown-time">{{ $unread_notification->created_at->diffForHumans() }}</span>
                        </p>
                    </div>
                </div>
            @empty

            @endforelse
        </div>
        <a href="{{ route('admin.notifications') }}" class="notification-dropdown-view-all">
            <x-icon.bell fill="#C8C5D4"/>
            View All Notification</a>
    </div>
</li>
