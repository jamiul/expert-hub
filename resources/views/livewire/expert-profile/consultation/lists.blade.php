<div x-data="{ isOpen: true }"
     :class="{ 'accordion-item-active': isOpen }" class="profile-block-card">
    <div x-on:click="isOpen = !isOpen" class="profile-block-card-header">
        <div class="profile-block-card-title">
            <x-icon.briefcase-time fill="#0036E3"/>
            <h3 class="h5 mb-0">Consultation</h3>
            <div class="tooltip-wrapper bottom-left">
                <i class="tooltip-icon">
                    <x-icon.info fill="#191D24B2"/>
                </i>
                <div class="tooltip-content">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Voluptas,
                    voluptates.
                </div>
            </div>
        </div>
        <div class="profile-block-card-action">
            <button class="icon-btn icon-btn-md border bg-primary">
                <x-icon.chevron-top fill="#fff"/>
            </button>
        </div>
    </div>
    <div x-show="isOpen" class="profile-block-card-body">
        @forelse($expert->consultation as $consultation)
            <div class="card-body border-0 {{ $loop->last ? '' : 'border-bottom pt-3' }}">
                <div class="row">
                    <div class="col-md-3">
                        <div class="prof-img">
                            <img src="{{ $consultation->image }}"></img>
                            @guest
                                <button
                                    wire:click="redirectToRoute"
                                    class="btn btn-primary btn-sm w-100 mt-2">
                                    Book Now
                                </button>
                            @endguest
                            @auth
                                <button
                                    wire:click="$dispatch('modal.open', { component: 'expert-profile.consultation.book', arguments: { consultation: {{ $consultation->id }} }})"
                                    class="btn btn-primary btn-sm w-100 mt-2">
                                    Book Now
                                </button>
                            @endauth
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="prof-text">
                            <h3 class="h6 mb-0">
                                <a class="text-inherit" href="{{ route('expert.consultation.show', $consultation) }}">
                                    {{ $consultation->expertField->name }}
                                </a>
                            </h3>

                            <p class="fw-bold">${{ $consultation->hourly_rate }}/1 hrs</p>

                            <p class="mb-0">{{ $consultation->description }}</p>

                            <div class="tag-list mt-3">
                                @foreach ($consultation->skills as $skill)
                                    <span class="tag">{{ $skill->name }}</span>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <p>No data</p>
        @endforelse
    </div>
</div>
