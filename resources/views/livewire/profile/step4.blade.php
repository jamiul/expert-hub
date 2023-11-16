<div class="timeline-right">
    @if($showExistingConsultationService)
    @foreach ($consultationServices as $consultation)
    <div class="timeline-prof1">
        <div class="row">
            <h3>Book Expert for Consultation</h3>
            <div class="col-md-3">
                <div class="prof-img">
                    <img src="{{ asset('storage/consultation/' . $consultation->photo) }}">
                    <h4>{{ auth()->user()->name }}</h4>
                </div>
            </div>
            <div class="col-md-9">
                <div class="prof-text">
                    <div class="prof-expart">
                        <ul>
                            <li>Expertise:</li>
                            @foreach ($consultation->skills as $skill)
                                <li><a class="pe-none" href="#">{{ $skill->name }}</a></li>
                            @endforeach
                        </ul>
                        <p>${{ $consultation->value }}/30mins</p>
                    </div>
                    <div class="profp1">
                        <span>{{ auth()->user()->first_name }}</span> offers consultation services to educational institutions, businesses and individuals seeking expertise in <span>{{ $consultation->skills->implode('name', ', ') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="timeline-would">
        <h3>Would you like to add additional <span>consultation</span> services?</h3>
        <ul>
            <li><button class="button button-xs button-outline-primary" wire:click="showAdditionalConsultationServiceForm">Yes</button></li>
        </ul>
    </div>
    @endif
    @if($noConsultationService)
    <div class="top-text">
        <h2>Would you like to offer <span>consultation</span> services?</h2>
        <ul>
            <li><button class="button button-xs button-outline-primary" type="button" wire:click="showConsultationForm">Yes</button></li>
        </ul>
    </div>
    @endif
    @if($consultationService)
    <form wire:submit="addConsultation">
        <div class="center-text">
            <h1>Which types of consultation service you would like to offer?</h1>
            @foreach ($availableConsultationTypes as $availableConsultationType)
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" wire:model="consultation_type" id="{{ $availableConsultationType }}" value="{{ $availableConsultationType }}"">
                    <label class="form-check-label" for="{{ $availableConsultationType }}">{{ $availableConsultationType }}</label>
                </div>
            @endforeach
            @error('consultation_type')
                <div class="error-message">{{ $message }}</div>
            @enderror
        </div>
        <div class="center-text position-relative">
            <h1>In which of your areas of expertise would you like to offer consultation service?</h1>
            <div class="Search">
                <input class="@error('selectedSkills') has-error @enderror" type="text" placeholder="Search skills..." wire:keyup="searchSkill" wire:model="skill">
                <button type="submit"><i class="fa fa-search"></i></button>
                @error('selectedSkills')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
            <div class="pt-2">
                @foreach ($selectedSkills as $id => $name)
                    <span class="btn mb-2 border rounded-4 lh-sm pb-1 d-inline-flex align-items-center">{{ $name }}<img wire:click="removeSkill({{ $id }})" class="ps-2" src="{{ asset('assets/frontend/img/close-i.png') }}"></span>
                @endforeach
            </div>
            @if($availableSkills)
                <div class="shadow bg-white position-absolute z-1" style="width: 560px; top:75px;">
                    <ul class="list-style-none py-2 mb-0 ps-3">
                        @forelse ($availableSkills as $id => $name)
                            <li class="py-2 cursor-pointer" wire:click="addSkill({{ $id }})" wire:key="{{ $id }}">{{$name}}</li>
                        @empty
                            <li>No results</li>
                        @endforelse
                    </ul>
                </div>
            @endif
        </div>
        <div class="buttom-input">
            <div class="buttom-left">
                <div class="form-group">
                    <label>Value / 30 mins</label>
                    <input class="@error('value') has-error @enderror" type="text" placeholder="eg. $120" wire:model="value">
                    @error('value')
                        <div class="error-message">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="buttom-right d-flex align-items-center">
                <input class="@error('photo') has-error @enderror" type="file" wire:model="photo">
                @error('photo')
                    <div class="error-message">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="d-flex mt-4">
            <button class="button button-lg button-primary me-4" type="submit">Create Consultation</button>
            @if($noConsultationService == false)
            <button class="button button-outline-primary" type="button" wire:click="hideAdditionalConsultationServiceForm">Cancel</button>
            @endif
        </div>
    </form>
    @endif
    @include('livewire.profile.buttons')
</div>