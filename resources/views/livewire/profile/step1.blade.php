<div class="timeline-right {{ $currentStep != 1 ? 'd-none' : '' }}">
    <div class="timeline-text">
        <h2>Tell us about your expertise</h2>
        <p>This helps in finding the right project for you</p>
    </div>
    <div class="timeline-text2">
        <h2>What languages do you speak?</h2>
        <p>We will use this to help match you with clients who are fluent in their language</p>
    </div>
    <div class="timeline-input position-relative">
        <input class="@error('selectedLanguages') has-error @enderror" type="text" placeholder="eg. English" wire:keyup="searchLanguage" wire:model="language">
        @error('selectedLanguages')
            <div class="error-message">{{ $message }}</div>
        @enderror
        <div class="pt-2">
            @foreach ($selectedLanguages as $id => $name)
                <span class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">{{ $name }}<img wire:click="removeLanguage({{ $id }})" class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></span>
            @endforeach
        </div>
        @if($availableLanguages)
            <div class="shadow bg-white position-absolute" style="width: 598px; top:55px;">
                <ul class="list-style-none py-2 mb-0 ps-3">
                    @forelse ($availableLanguages as $availableLanguage)
                        <li class="py-2 cursor-pointer" wire:click="addLanguage({{ $availableLanguage->id }})" wire:key="{{ $availableLanguage->id }}">{{$availableLanguage->name}}</li>
                    @empty
                        <li>No results</li>
                    @endforelse
                </ul>
            </div>
        @endif
    </div>
    @include('livewire.profile.buttons')
</div>