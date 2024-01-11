<div class="card card-24" id="work-experience">
    <div class="card-body">
        <div class="page-block-heading d-flex justify-content-between gap-3 mb-3">
            <div class="d-flex gap-2 align-items-center">
                <x-icon.user-tie />
                <h3 class="h5 mb-0">Work Experience</h3>
                <button class="icon-btn">
                    <x-icon.info fill="#C8C5D4" />
                </button>
            </div>
            <button wire:click="$dispatch('modal.open', { component: 'profile.experience.create'})"
                class="icon-btn icon-btn-md border">
                <x-icon.add />
            </button>
        </div>
        @forelse ($experiences as $experience)
            <div class="card card-24 {{ $loop->first ? '' : 'mt-3' }}">
                <div class="card-body">
                    <div class="d-flex gap-3 justify-content-sm-between">
                        <div>
                            <h6 class="">{{ $experience->title }}</h6>
                            <p class="mb-0"><i>{{ $experience->institute . ', ' }} {{ $experience->address }} </i> |
                                <strong>
                                    {{ $experience->start_year }} - {{ $experience->end_year ?? 'Continuing' }}</strong>
                            </p>
                        </div>
                        <div>
                            <button
                                wire:click="$dispatch('modal.open', { component: 'profile.experience.edit', arguments: { experience: {{ $experience->id }} }})"
                                class="icon-btn icon-btn-md border">
                                <x-icon.edit />
                            </button>
                            <button wire:click="deleteExperience({{ $experience->id }})"
                                class="icon-btn icon-btn-md border">
                                <x-icon.delete />
                            </button>
                        </div>
                    </div>
                    @if ($showReadMoreButton === $experience->id)
                        <p>
                            {!! nl2br(e($experience->description)) !!}
                            <a href="#work-experience" wire:click="readLess">Less</a>
                        </p>
                    @else
                        <p>
                            {{ Str::limit($experience->description, 300) }}
                            <a href="#work-experience" wire:click="readMore({{ $experience->id }})">More</a>
                        </p>
                    @endif
                </div>
            </div>
        @empty
            <p>No data</p>
        @endforelse
    </div>
</div>
