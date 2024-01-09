<div class="profile-edit-widget user-education-edit-widget">
    <h4 class="widget-title">Education
        <button wire:click="$dispatch('modal.open', { component: 'profile.education.create'})"
            class="icon-btn icon-btn-md">
            <x-icon.add />
        </button>
    </h4>
    <div class="widget-content">
        @forelse ($educations as $education)
            <div class="user-education-box-item">
                <div>
                    <p class="text-sm fw-medium mt-1 mb-0">{{ $education->degree }}</p>
                    <p class="text-sm mb-0">{{ $education->field }}</p>
                    <p class="text-sm fst-italic mb-0">{{ $education->institution }}</p>
                    <p class="text-sm fw-medium mb-1">
                        {{ $education->start_year.'-'}}{{$education->end_year ?? 'Continuing'}}</p>
                </div>
                <div class="ms-auto">
                    <button class="icon-btn icon-btn-md">
                        <x-icon.edit />
                    </button>
                    <button class="icon-btn icon-btn-md" data-bs-toggle="modal" data-bs-target="#deleteEducation">
                        <x-icon.delete />
                    </button>
                </div>
            </div>
        @empty
            <p>No data</p>
        @endforelse
        {{-- <div class="user-education-box-item">
            <div>
                <p class="text-sm fw-medium mt-1 mb-0">Doctor of Philosophy</p>
                <p class="text-sm mb-0">Public Health</p>
                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                <p class="text-sm fw-medium mb-1">1995 - 2000</p>
            </div>
            <div class="ms-auto">
                <button class="icon-btn icon-btn-md">
                    <x-icon.edit />
                </button>
                <button class="icon-btn icon-btn-md" data-bs-toggle="modal"
                    data-bs-target="#deleteEducation">
                    <x-icon.delete />
                </button>
            </div>
        </div> --}}
        {{-- <div class="user-education-box-item">
            <div>
                <p class="text-sm fw-medium mt-1 mb-0">Master’s</p>
                <p class="text-sm mb-0">Public Health</p>
                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                <p class="text-sm fw-medium mb-1">1993 -1995</p>
            </div>
            <div class="ms-auto">
                <button class="icon-btn icon-btn-md">
                    <x-icon.edit />
                </button>
                <button class="icon-btn icon-btn-md" data-bs-toggle="modal"
                    data-bs-target="#deleteEducation">
                    <x-icon.delete />
                </button>
            </div>
        </div>
        <div class="user-education-box-item mb-0">
            <div>
                <p class="text-sm fw-medium mt-1 mb-0">Bachelor</p>
                <p class="text-sm mb-0">Public Health</p>
                <p class="text-sm fst-italic mb-0">EduExHub University</p>
                <p class="text-sm fw-medium mb-1">1989 - 1993</p>
            </div>
            <div class="ms-auto">
                <button class="icon-btn icon-btn-md">
                    <x-icon.edit />
                </button>
                <button class="icon-btn icon-btn-md">
                    <x-icon.delete />
                </button>
            </div>
        </div> --}}

    </div>
</div>
