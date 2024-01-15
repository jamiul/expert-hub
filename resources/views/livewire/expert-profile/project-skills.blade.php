<div>
    @forelse ($skills as $skill)
        <a href="#" class="fs-13 fw-medium rounded-pill">
            {{ $skill->name }}
        </a>
        @if($skill->count() > 3 && $loop->last)
            <a
                wire:click="toggleShowMore"
                class="fs-13 fw-medium rounded-pill collapse__btn collapsed {{ $skills->count() < 3 ? 'd-none' : '' }}"
                href="#contentTag"
            >
                <span class="count">
                    {{ $showMore ? 'Show Less' : '+'.$skillCount . ' More' }}
                </span>
            </a>
        @endif
    @empty
        <a href="#" class="fs-13 fw-medium rounded-pill">
            __{{'No data'}}
        </a>
    @endforelse
</div>