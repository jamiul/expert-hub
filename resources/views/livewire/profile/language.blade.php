<div class="progress-step-content ">
    <h5 class="mb-2">What languages do you speak?</h5>
    <p>We will use this to help match you with clients who are fluent in their language.</p>

    <div class="d-grid grid-cols-sm-6 gap-3">
        @foreach ($languages as $language)
        <div class="card">
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td>Language</td>
                        <td class="fw-medium">: {{ $language->name }}</td>
                    </tr>
                    <tr>
                        <td>Proficiency</td>
                        <td class="fw-medium">: {{ $language->pivot->proficiency }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer bg-white d-flex justify-content-center gap-3">
                <button wire:click="$dispatch('modal.open', { component: 'profile.language.edit', arguments: { language: {{ $language->id }} }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.edit/>
                </button>
                <button wire:click="deleteLanguage({{ $language->id }})" class="icon-btn icon-btn-sm p-0">
                    <x-icon.delete/>
                </button>
            </div>
        </div>
        @endforeach
    </div>

    <button wire:click="$dispatch('modal.open', { component: 'profile.language.create'})" class="btn btn-link px-0 d-inline-flex align-items-center my-4">
        <x-icon.add/><span>Add Language</span>
    </button>
</div>