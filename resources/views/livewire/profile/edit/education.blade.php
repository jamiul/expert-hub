<div class="profile-edit-widget user-education-edit-widget">
    <h4 class="widget-title">Education
        <button wire:click="$dispatch('modal.open', { component: 'profile.education.create'})"
            class="icon-btn icon-btn-md">
            <x-icon.add />
        </button>
    </h4>
    <div class="widget-content">
        @forelse ($educations as $education)
            <div class="user-education-box-item {{ $loop->last ? 'mb-0' : '' }}">
                <div>
                    <p class="text-sm fw-medium mt-1 mb-0">{{ $education->degree }}</p>
                    <p class="text-sm mb-0">{{ $education->field }}</p>
                    <p class="text-sm fst-italic mb-0">{{ $education->institution }}</p>
                    <p class="text-sm fw-medium mb-1">
                        {{ $education->start_year . '-' }} {{ $education->end_year ?? 'Continuing' }}</p>
                </div>
                <div class="ms-auto">
                    <button wire:click="$dispatch('modal.open', { component: 'profile.education.edit', arguments: { education: {{ $education->id }} }})" class="icon-btn icon-btn-md">
                        <x-icon.edit />
                    </button>
                    <button wire:click="deleteEducation({{ $education->id }})" class="icon-btn icon-btn-md">
                        <x-icon.delete />
                    </button>
                </div>
            </div>
        @empty
            <p>No data</p>
        @endforelse
    </div>
</div>
