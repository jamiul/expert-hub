<li>
    <a class="icon-btn border" @click="openDropdown = (openDropdown === 'message') ? null : 'message'" href="#">
        <!-- <span>99</span> -->
        <span class="{{$unreadMessageCount > 0 ? '' : 'd-none'}}" wire:poll.keep-alive>{{ $unreadMessageCount }}</span>
        <x-icon.message-line />
    </a>
    <div x-show="openDropdown === 'message'" class="header-dropdown">
        <div class="message-dropdown-inner">
            <div class="message-dropdown-item-wrapper">
            @forelse($unreadMessages as $unreadMessage)
                <div class="message-dropdown-item message-dropdown-item-unread" wire:click="markAsSeen('{{ $unreadMessage->id }}')">
                    <div class="message-dropdown-thumb">
                        <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/profile-img.png') }}" class="" alt="avatar">
                    </div>
                    <div class="message-dropdown-info">
                        <p class="text-sm fw-medium message-dropdown-title">{{Str::limit($unreadMessage->message->content, $limit = 25, $end = '...')}}
                            </p>
                        <p class="text-sm">
                            <!-- <span class="message-dropdown-message">A wonderful serenity has taken</span> -->
                            <span class="message-dropdown-time">{{ $unreadMessage->created_at->diffForHumans() }}</span>
                        </p>
                    </div>
                </div>
                @empty

                @endforelse
                
                
            </div>
            <a href="/figma/client-chatbox-new" class="message-dropdown-view-all">
                <x-icon.message-line fill="#C8C5D4" />
                View All Message
            </a>
        </div>
    </div>
</li>