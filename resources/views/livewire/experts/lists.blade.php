<div class="col-md-8 pt-3">
    @forelse ($experts as $expert)
        <div class="right-sidebar" wire:loading.class="opacity-25">
            <div class="right-database">
                <div class="database-block">
                    <div class="database-contant">
                        <div class="database-img">
                            <img class="rounded-circle" src="{{ $expert->picture ?: getGravatar($expert->user->email) }}">
                        </div>
                        <div class="database-text">
                            <h4><a href="{{ route('find-experts.details') }}">{{ $expert->user->full_name }}</a>
                            </h4>
                            <span>{{ $expert->expertField->name }}</span>
                            {{-- <span>University of Sydney</span> --}}
                            <span>{{ $expert->user->country->name }}</span>
                        </div>
                    </div>
                    <div class="database-right">
                        <button wire:click="favourite({{ $expert->id }})"
                                class="btn btn-outline-light m-1 {{ $expert->favourited() ? 'favourited' : ''}}">
                            <span class="favorite-icon"> <x-icon.heart fill="#0036E3"/></span>
                            <span class="favorite-icon-filled"> <x-icon.heart-filled fill="#0036E3"/></span>
                        </button>
                        <div class="dropdown">
                            <button class="btn btn-outline-light m-1" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <x-icon.share/>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://linkedin.com/shareArticle?u={{ route('home') }}">
                                        <x-icon.linkedin/>
                                        Linkedin
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" target="_blank"
                                       href="https://www.facebook.com/sharer/sharer.php?u={{ route('home') }}">
                                        <x-icon.facebook/>
                                        Facebook
                                    </a>
                                </li>
                                <li x-data="{ scholarshipUrl: '{{ route('home') }}' }">
                                    <button class="dropdown-item" x-clipboard="scholarshipUrl">
                                        <x-icon.copy/>
                                        Copy Link
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="consultant-reviw">
                    <ul>
                        <li><strong>${{ $expert->hourly_rate }}</strong> / hr</li>
                        <li>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </li>
                    </ul>
                </div>
                <div class="database-p">
                    <p>
                        {{ $expert->biography }}
                        ... <a href="#">more</a></p>
                </div>
                <div class="projects-slider">
                    <div class="tag__list d-flex flex-wrap mt-3">
                        @foreach ($expert->expertises as $expertise)
                            <a href="#" class="fs-13 fw-medium rounded-pill">{{ $expertise->name }}</a>
                            @break($loop->iteration === 4)
                        @endforeach
                        @if($expert->expertises->count() > 4)
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
                        @endif
                    </div>
                </div>
            </div>
        </div>
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
    <div class="text-center">
        {{ $experts->onEachSide(1)->links() }}
    </div>
</div>
