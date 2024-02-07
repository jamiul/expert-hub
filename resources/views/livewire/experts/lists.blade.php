<div>
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
                    @auth
                        <button class="btn btn-icon btn-outline-light m-1">
                            <x-icon.message-line/>
                        </button>
                        <button
                            wire:click="$dispatch('modal.open', {component: 'project.invite', arguments: {'expert': {{ $expert->id }}, 'project': {{ $project }}}})"
                            class="btn btn-md btn-outline-primary">Invite Project
                        </button>
                    @else
                        <a href="{{ route('auth.login') }}" class="btn btn-icon btn-outline-light m-1">
                            <x-icon.message-line/>
                        </a>
                        <a href="{{ route('auth.login') }}" class="btn btn-md btn-outline-primary">Invite Project</a>
                    @endauth
                </div>
            </div>
            <div class="expert-card-body">
                <div class="d-flex gap-3 align-items-center">
                    <div><strong class="fw-medium">${{ $expert->hourly_rate }} </strong>/ hr</div>
                    <div class="star-ratings d-none">
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                        <x-icon.star-fill/>
                    </div>
                </div>

                <div class="expert-summary py-3">
                    <p class="mb-0 text-summary text-base">
                        {{ $expert->biography }}

                    </p>
                </div>
                <div class="tag-list light-tag-list" x-data="{ showAllTags: false, buttonText: ' + {{ $expert->expertises->count() - 4 }}' + ' More' }" :class="{ 'showing-less-tag': !showAllTags }">
                    @foreach ($expert->expertises as $expertise)
                        <span class="tag">{{ $expertise->name }}</span>
                    @endforeach
                    @if ($expert->expertises->count() > 4)
                        <button x-on:click="showAllTags = !showAllTags; buttonText = showAllTags ? 'Show Less' : ' + {{ $expert->expertises->count() - 4 }}' + ' More' " x-text="buttonText" class="all-tags-trigger"></button>
                    @endif
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
        <x-empty/>
    @endforelse
    <hr>
    {{ $experts->onEachSide(1)->links() }}
</div>
