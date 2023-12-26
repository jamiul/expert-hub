<div class="progress-step-content ">
    <h5 class="mb-2">Work Experience History</h5>
    <p>Add your working experience.</p>
    <div class="d-grid gap-3">
        @forelse ($experiences as $experience)
        <div class="card">
            <div class="card-header bg-white">
                <p class="fw-medium mb-0"> {{  $experience->title }}</p>
            </div>
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td width="90">Institute </td>
                        <td width="3">:</td>
                        <td class="fw-medium"> {{ $experience->institute }}</td>
                    </tr>
                    <tr>
                        <td>Address </td>
                        <td>:</td>
                        <td class="fw-medium"> {{ $experience->address }}</td>
                    </tr>
                    <tr>
                        <td>Duration</td>
                        <td>:</td>
                        <td class="fw-medium"> {{ $experience->start_year }} @if($experience->end_year)- {{ $experience->end_year }} @endif</td>
                    </tr>
                    @if($experience->description)
                    <tr>
                        <td>Description </td>
                        <td>:</td>
                        <td class="fw-medium"> {{ $experience->description }}</td>
                    </tr>
                    @endif
                </table>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center gap-3">
                <button wire:click="$dispatch('modal.open', { component: 'profile.experience.edit', arguments: { experience: {{ $experience->id }} }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.edit/>
                </button>
                <button wire:click="deleteExperience({{ $experience->id }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.delete/>
                </button>
            </div>
        </div>
        @empty
            
        @endforelse
    </div>
    <button wire:click="$dispatch('modal.open', { component: 'profile.experience.create'})" class="btn btn-link px-0 d-inline-flex align-items-center my-4" >
        <x-icon.add/><span>Add Work Experience</span>
    </button>
</div>
