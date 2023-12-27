<div class="progress-step-content">
    <h5 class="mb-2">Educations</h5>
    <p>Add your educational background to let employers know where you studied or are currently
        studying. Even if you didn't finish, it's important to include it here. And if you've earned
        a college degree, you don't need to add your high school/GED.</p>
    <div class="d-grid gap-3">
        @forelse ($educations as $education)
        <div class="card">
            <div class="card-header bg-white">
                <p class="fw-medium mb-0"> {{ $education->institution }}</p>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td width="120">Degree</td>
                        <td width="3">:</td>
                        <td class="fw-medium"> {{ $education->degree }}</td>
                    </tr>
                    <tr>
                        <td>Field of Study</td>
                        <td>:</td>
                        <td class="fw-medium"> {{ $education->field }}</td>
                    </tr>
                    <tr>
                        <td>Start Year</td>
                        <td>:</td>
                        <td class="fw-medium"> {{ $education->start_year }}</td>
                    </tr>
                    <tr>
                        <td>End Year</td>
                        <td>:</td>
                        <td class="fw-medium"> {{ $education->end_year }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center gap-3">
                <button wire:click="$dispatch('modal.open', { component: 'profile.education.edit', arguments: { education: {{ $education->id }} }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.edit/>
                </button>
                <button wire:click="deleteEducation({{ $education->id }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.delete/>
                </button>
            </div>
        </div>
        @empty
            
        @endforelse
    </div>
    <button wire:click="$dispatch('modal.open', { component: 'profile.education.create'})" class="btn btn-link px-0 d-inline-flex align-items-center my-4">
        <x-icon.add/><span>Add Education</span>
    </button>
</div>