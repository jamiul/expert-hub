<div class="projects-slider">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            @forelse ($expertises as $expertise)
                @if ($loop->index == 0)
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3">
                        <h4 class="light-weight active">
                            <p> <img src="{{ asset('assets/frontend/img/admin/activelight.png') }}" alt=""> </p>
                            <p>{{ $expertise->name }}</p>
                        </h4>
                    </button>
                @else
                    <button type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="{{ $loop->index }}" aria-label="Slide {{ $loop->iteration }}">
                        <h4 class="light-weight">
                            <p>{{ $expertise->name }}</p>
                        </h4>
                    </button>
                @endif
                @if ($expertise->count() > 3 && $loop->last)
                    <button type="button" wire:click="toggleShowMore" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide-to="2" aria-label="Slide 6">
                        <h4 class="more-read more-read-blog">
                            <p>{{ $showMore ? 'Less' : $expertiseCount . '+More' }}</p>
                        </h4>
                    </button>
                @endif
            @empty
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 5">
                    <h4 class="light-weight">
                        <p>No Data</p>
                    </h4>
                </button>
            @endforelse
        </div>
    </div>
</div>
