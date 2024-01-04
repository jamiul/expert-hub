<div class="product-slider">
    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-w">
                <div class="hero-contant">
                    <div class="hero-text">
                        <h2>Find a Top Academic <br> Expert for Your Project</h2>
                        <p>EduExHub is an exclusive platform featuring top academic experts across <br> diverse fields.
                            Whether it's a personal or institutional project</p>
                        <div class="hero-button d-flex gap-3">
                            <a class="btn btn-primary edux-btn-primary">Find an Expert</a>
                            <a class="btn edux-btn-border-primary">Become an Expert</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-inner">
                    @forelse ($experts as $expert)
                        @if ($loop->first)
                            <div class="carousel-item active">
                                <img src="{{ $expert->getFirstMediaUrl('picture') }}" />
                                <div class="item-text">
                                    <a href="#">
                                        <img src="{{ asset('assets/frontend/img/map-img.png') }}" />
                                        <h4>{{ $expert->user->full_name }}</h4>
                                        <p>{{ $expert->expertField ? $expert->expertField->name : '' }}</p>
                                        <h5>Oxford University</h5>
                                    </a>
                                </div>
                            </div>
                        @else
                            <div class="carousel-item">
                                <img src="{{ $expert->getFirstMediaUrl('picture') }}" />
                                <div class="item-text">
                                    <a href="#">
                                        <img src="{{ asset('assets/frontend/img/map-img.png') }}" />
                                        <h4>{{ $expert->user->full_name }}</h4>
                                        <p>{{ $expert->expertField ? $expert->expertField->name : '' }}</p>
                                        <h5>Oxford University</h5>
                                    </a>
                                </div>
                            </div>
                        @endif

                    @empty
                        <p>No data</p>
                    @endforelse
                </div>
            </div>
            <div class="carousel-indicators">
                @forelse ($experts as $expert)
                    @if ($loop->first)
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $loop->index }}" class="active" aria-current="true"
                            aria-label="Slide {{ $loop->iteration }}">
                            <div class="carousel-con">
                                <div class="carousel-img">
                                    <img src="{{ $expert->getFirstMediaUrl('picture') }}" />
                                </div>
                                <div class="carousel-text">
                                    <h4>{{ $expert->user->full_name }}</h4>
                                    <p>{{ $expert->expertField ? $expert->expertField->name : '' }}</p>
                                </div>
                            </div>
                        </button>
                    @else
                        <button type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide-to="{{ $loop->index }}" aria-label="Slide {{ $loop->iteration }}">
                            <div class="carousel-con">
                                <div class="carousel-img">
                                    <img src="{{ $expert->getFirstMediaUrl('picture') }}" />
                                </div>
                                <div class="carousel-text">
                                    <h4>{{ $expert->user->full_name }}</h4>
                                    <p>{{ $expert->expertField ? $expert->expertField->name : '' }}</p>
                                </div>
                            </div>
                        </button>
                    @endif
                @empty
                    <p>No data</p>
                @endforelse
            </div>
            <div class="carousel-control">
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="material-symbols-outlined">chevron_left</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="material-symbols-outlined">navigate_next</span>
                </button>
            </div>
        </div>
    </div>
</div>
