<div>
    <p class="fw-medium mb-1">What languages do you speak?</p>
    <p class="text-sm">We will use this to help match you with clients who are fluent in their language (Max 4)</p>

    <div class="d-grid grid-cols-sm-6 gap-3">
        @forelse ($languages as $language)
        <div class="card">
            <div class="card-body">
                <table class="table table-sm table-borderless mb-0">
                    <tr>
                        <td width="90">Language</td>
                        <td width="3">:</td>
                        <td class="fw-medium"> {{ $language->name }}</td>
                    </tr>
                    <tr>
                        <td>Proficiency</td>
                        <td width="3">:</td>
                        <td class="fw-medium"> {{ $language->pivot->proficiency }}</td>
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
        @empty

        @endforelse
    </div>

    <button wire:click="$dispatch('modal.open', { component: 'profile.language.create'})" class="btn btn-link px-0 d-inline-flex align-items-center mt-2 mb-4">
        <x-icon.add fill="#0036E3"/><span class="ms-2">Add Language</span>
    </button>
</div>
