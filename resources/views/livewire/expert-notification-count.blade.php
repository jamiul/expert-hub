<div>
    <div class="dropdown">
        <a class="drop__btn rounded-circle p-0 d-inline-flex justify-content-center align-items-center position-relative" href="#" role="button" id="messageDrop" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/notification.svg') }}" alt="notification">
            <span class="{{$unreadCount > 0 ? 'block' : 'hidden'}} badge rounded-pill text-white fw-bold position-absolute d-flex justify-content-center align-items-center" wire:poll.keep-alive>{{ $unreadCount }}</span>
        </a>
    </div>
</div>
