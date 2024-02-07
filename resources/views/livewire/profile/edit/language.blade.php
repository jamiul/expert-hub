<div class="profile-edit-widget user-education-edit-widget">
    <h4 class="widget-title">Language
        <button wire:click="$dispatch('modal.open', { component: 'profile.language.create'})"
            class="icon-btn icon-btn-md {{ ! $editable ? 'd-none' : '' }}">
            <x-icon.add />
        </button>
    </h4>
    <div class="widget-content">
        @forelse ($languages as $language)
            <div class="user-education-box-item {{ $loop->last ? 'mb-0' : '' }}">
                <p><img src="{{ asset('/assets/frontend/default/img/expert_dashboard/icons/language.svg') }}"> {{ $language->pivot->proficiency }} in {{ $language->name }}</p>
                <div class="ms-auto">
                    <button wire:click="$dispatch('modal.open', { component: 'profile.language.edit', arguments: { language: {{ $language->id }} }})" class="icon-btn icon-btn-md {{ ! $editable ? 'd-none' : '' }}">
                        <x-icon.edit />
                    </button>
                    <button wire:click="deleteLanguage({{ $language->id }})" class="icon-btn icon-btn-md {{ ! $editable ? 'd-none' : '' }}">
                        <x-icon.delete />
                    </button>
                </div>
            </div>
        @empty
            <p>No data</p>
        @endforelse
    </div>
</div>
