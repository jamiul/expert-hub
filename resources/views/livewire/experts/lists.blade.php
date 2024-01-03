<div class="col-md-8">
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
                        <a class="data-icon" href="#"><img
                                src="{{ asset('assets/frontend/img/like-icon.png') }}"></a>
                        <a class="data-icon" href="#"><img
                                src="{{ asset('assets/frontend/img/share-icon.png') }}"></a>
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
        <p>No experts found</p>
    @endforelse
    <hr>
    <div class="text-center">
        {{ $experts->onEachSide(1)->links() }}
    </div>
</div>
