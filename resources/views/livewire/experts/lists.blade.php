<div class="page-content p-0" wire:loading.class="opacity-25">
    @forelse ($experts as $expert)
        <div class="expert-card">
            <div class="expert-card-header mb-2">
                <div class="expert-thumb">
                    <div class="expert-thumb-box">
                        <img src="{{ $expert->picture ?: getGravatar($expert->user->email) }}"/>
                    </div>
                </div> <!--expert-thumb-->
                <div class="expert-info">
                    <a href="{{ route('expert.profile.show', $expert) }}">
                        <h3 class="h6 project-expert-name mb-0">
                            {{ $expert->user->full_name }}
                        </h3>
                    </a>

                    <ul class="expert-meta">
                        <li>{{ $expert->expertField->name }}</li>
                        {{-- <li>Melbourne University</li> --}}
                        <li>{{ $expert->user->country->name }}</li>
                    </ul>

                </div><!--expert-info-->
                <div class="expert-card-action">
                    <button wire:click="favourite({{ $expert->id }})"
                            class="btn btn-icon btn-outline-light btn-favorite m-1 {{ $expert->favourited() ? 'favorited' : ''}}">
                        <span class="heart-line"> <x-icon.heart fill="#0036E3"/></span>
                        <span class="heart-filled"> <x-icon.heart-filled fill="#0036E3"/></span>
                    </button>
                    <button class="btn btn-icon btn-outline-light m-1">
                        <x-icon.message-line/>
                    </button>
                    <button class="btn btn-md btn-outline-primary">Invite Project</button>
                </div>
            </div>
            <div class="expert-card-body">
                <div class="d-flex gap-3 align-items-center">
                    <div><strong class="fw-medium">${{ $expert->hourly_rate }} </strong>/ hr</div>
                    <div class="star-ratings">
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                    </div>
                </div>

                <div class="expert-summary py-3">
                    <p class="mb-0">
                        {{ $expert->biography }}
                        ... <a href=""> more</a>
                    </p>
                </div>
                <div class="tag-list expert-tag-list">
                    @foreach ($expert->expertises as $expertise)
                        <a href="#" class="expert-tag">{{ $expertise->name }}</a>
                    @endforeach
                </div>
            </div>
        </div>

                        {{-- @if($expert->expertises->count() > 4)
                        <span class="collapse" id="{{ $expert->user->username }}">
                            @foreach ($expert->expertises as $expertise)
                                @if($loop->index >= 4)
                                <a href="#" class="fs-13 fw-medium rounded-pill">{{ $expertise->name }}</a>
                                @endif
                            @endforeach
                        </span>
                        <a class="fs-13 fw-medium rounded-pill collapse__btn collapsed" data-bs-toggle="collapse" href="#{{ $expert->user->username }}" aria-expanded="false" aria-controls="contentTag1">
                            <span class="count">+{{ $expert->expertises->count() - 4 }} More</span>
                            <span class="less"> <i class="fa-solid fa-chevron-up"></i> Show Less </span>
                        </a>
                        @endif --}}

    @empty
        <div class="d-flex flex-column align-items-center">
            <img style="width: 240px;" src="{{ asset('assets/frontend/img/notification.png') }}" alt="client health">
            <div style="width: 389px;">
                <h3 class="text-center">There are no results that match your search.</h3>
                <p class="text-center mb-0 fw-small">Please try adjusting your search keywords or filters.</p>
            </div>
        </div>
    @endforelse
    <hr>
    {{ $experts->onEachSide(1)->links() }}
</div>
