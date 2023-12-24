<div class="progress-step-content ">
    <h5 class="mb-2">Work Experience History</h5>
    <p>Add your working experience.</p>
    <div class="d-grid grid-cols-sm-6 gap-3">
        @foreach ($experiences as $experience)
        <div class="card">
            <div class="card-header bg-white">
                <p class="fw-medium mb-0"> {{ $experience->title }}</p>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between">
                    <div><p class="text-lg">{{ $experience->institute }}</p></div>
                    <div><p class="text-sm fw-medium">{{ $experience->start_year }} - {{ $experience->end_year }}</p></div>
                </div>
                <p class="fst-italic"> {{ $experience->address }}</p>
                <p>{{ $experience->description }}</p>
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
        @endforeach
    </div>
    <button wire:click="$dispatch('modal.open', { component: 'profile.experience.create'})" class="btn btn-link px-0 d-inline-flex align-items-center my-4" >
        <x-icon.add/><span>Add Work Experience</span>
    </button>
</div>
